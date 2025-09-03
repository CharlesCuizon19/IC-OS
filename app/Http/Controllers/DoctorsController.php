<?php

namespace App\Http\Controllers;

use App\Models\cities;
use App\Models\countries;
use App\Models\doctor_institutions;
use App\Models\doctors;
use App\Models\institutions;
use App\Models\profiles;
use App\Models\files;
use App\Models\gender;
use App\Models\images;
use App\Models\role_descriptions;
use App\Models\roles;
use App\Models\specializations;
use App\Models\User;
use App\Models\user_roles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class DoctorsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $doctors = doctors::with('User', 'specializations', 'doctor_institutions.institutions', 'User.profiles', 'User.profiles.images', 'User.profiles.images.files')->get();
        return view('admin.pages.doctors.doctors', compact('doctors'));
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'email' => 'required|string|max:255|unique:users,email',
                'password' => 'nullable|string|max:255',
                'first_name' => 'required|string|max:255',
                'middle_name' => 'nullable|string|max:255',
                'last_name' => 'required|string|max:255',
                'address' => 'nullable|string|max:255',
                'phone' => 'required|string|max:255',
                'gender' => 'required|string|max:255',
                'date_of_birth' => 'required|date',
                'country' => 'required|string|max:255',
                'about' => 'nullable|string',
                'specialty' => 'nullable|string|max:255',

                // ✅ Institutions validation
                'institutions' => 'required|array|min:1',
                'institutions.*.name'    => 'required|string|max:255',
                'institutions.*.address' => 'required|string|max:255',
                'institutions.*.phone'   => 'required|string|max:20',
                'institutions.*.website' => 'nullable|string|max:255',

                'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5120',
            ]);

            DB::beginTransaction();

            // === Specialization ===
            $specialty = specializations::firstOrCreate([
                'specialization_name' => $request->input('specialty')
            ]);

            // === Create User ===
            $user = new User();
            $user->email = $request->input('email');
            $user->password = bcrypt($request->input('password'));
            $user->is_active = 1;
            $user->save();

            // === File & Image ===
            $file = new files();
            if ($request->hasFile('file')) {
                $uploadedFile = $request->file('file');
                $fileName = time() . '.' . $uploadedFile->getClientOriginalExtension();
                $uploadedFile->move(public_path('uploads'), $fileName);
                $file->image_path = 'uploads/' . $fileName;
                $file->save();
            }

            $image = new images();
            $image->uploaded_by_id = $user->id ?? null;
            $image->alt_text = 'alt_text';
            $image->file_id = $file->id;
            $image->save();

            // === Gender, Country, City ===
            $gender = gender::create(['gender_name' => $request->input('gender')]);
            $country = countries::firstOrCreate(['country_name' => $request->input('country')]);
            $city = cities::firstOrCreate([
                'city_name' => $request->input('city'),
                'country_id' => $country->id
            ]);

            // === Profile ===
            $profile = new profiles();
            $profile->first_name = $request->input('first_name');
            $profile->middle_name = $request->input('middle_name');
            $profile->last_name = $request->input('last_name');
            $profile->phone = $request->input('phone');
            $profile->address = $request->input('address');
            $profile->gender_id = $gender->id;
            $profile->date_of_birth = $request->input('date_of_birth');
            $profile->city_id = $city->id;
            $profile->user_id = $user->id;
            $profile->image_id = $image->id;
            $profile->save();

            // === Doctor ===
            $doctor = new doctors();
            $doctor->about = $request->input('about');
            $doctor->specialization_id = $specialty->id;
            $doctor->user_id = $user->id;
            $doctor->save();

            // === Institutions (multiple) ===
            foreach ($request->institutions as $inst) {
                // Find or create institution by name + address
                $institution = institutions::firstOrCreate(
                    [
                        'name'    => $inst['name'],
                        'address' => $inst['address'],
                    ],
                    [
                        'phone'   => $inst['phone'],
                        'website' => $inst['website'] ?? null,
                    ]
                );

                // Attach doctor to institution
                doctor_institutions::firstOrCreate([
                    'doctor_id'      => $doctor->id,
                    'institution_id' => $institution->id,
                ]);
            }


            // === Role Assignment ===
            $role_description = role_descriptions::where('description', 'Member')->first();
            user_roles::create([
                'user_id' => $user->id,
                'role_id' => $role_description?->id,
            ]);

            DB::commit();

            return redirect()->route('show.doctors')->with('success', 'Doctor created successfully!');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::info('Error creating doctor: ' . $e->getMessage());

            return redirect()->back()->with('error', 'An error occurred while creating the doctor. Please try again later.');
        }
    }



    public function update(Request $request, $id)
    {
        try {
            $doctor = doctors::with('User', 'doctor_institutions', 'specializations')->findOrFail($id);

            DB::beginTransaction();

            // Update user
            $user = $doctor->User;
            $user->email = $request->input('email');
            if ($request->filled('password')) {
                $user->password = bcrypt($request->input('password'));
            }
            $user->save();

            // Update specialization
            $specialty = $doctor->specializations;
            if ($specialty) {
                $specialty->specialization_name = $request->input('specialty');
                $specialty->save();
            }

            // Update doctor
            $doctor->about = $request->input('about');
            $doctor->save();

            // Update profile
            $profile = $user->profiles;
            $profile->first_name = $request->input('first_name');
            $profile->middle_name = $request->input('middle_name');
            $profile->last_name = $request->input('last_name');
            $profile->phone = $request->input('phone');
            $profile->address = $request->input('address');
            $profile->date_of_birth = $request->input('date_of_birth');
            $profile->save();

            // Update gender
            $gender = $profile->gender;
            if ($gender) {
                $gender->gender_name = $request->input('gender');
                $gender->save();
            }

            // Update country and city
            $city = $profile->cities;
            $country = $city->country ?? null;

            if ($country) {
                $country->country_name = $request->input('country');
                $country->save();
            }

            if ($city) {
                $city->city_name = $request->input('city');
                $city->save();
            }

            // Update institution
            $doctorInstitution = $doctor->doctor_institutions()->first();
            if ($doctorInstitution) {
                $institution = $doctorInstitution->institutions;
                $institution->name = $request->input('institution');
                $institution->address = $request->input('institution_address');
                $institution->phone = $request->input('institution_phone');
                $institution->website = $request->input('website');
                $institution->save();
            }

            // Update file/image if new file uploaded
            if ($request->hasFile('file')) {
                $uploadedFile = $request->file('file');
                $fileName = time() . '.' . $uploadedFile->getClientOriginalExtension();
                $filePath = $uploadedFile->move(public_path('uploads'), $fileName);
                $filePath = 'uploads/' . $fileName;

                $file = $profile->images->files ?? new files();
                $file->image_path = $filePath;
                $file->save();

                $image = $profile->images ?? new images();
                $image->uploaded_by_id = $user->id;
                $image->alt_text = 'alt_text';
                $image->file_id = $file->id;
                $image->save();

                $profile->image_id = $image->id;
                $profile->save();
            }

            DB::commit();

            return redirect()->route('show.doctors')->with('success', 'Doctor updated successfully!');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Error updating doctor: ' . $e->getMessage());
            return redirect()->back()->with('error', 'An error occurred while updating the doctor.');
        }
    }



    public function destroy($id)
    {
        try {
            DB::beginTransaction();

            $doctor = doctors::with([
                'User.profiles.images.files',
                'doctor_institutions',
            ])->findOrFail($id);

            // Delete doctor_institutions (pivot only, not institutions)
            foreach ($doctor->doctor_institutions as $docInst) {
                $docInst->delete();
            }

            // Delete profile + image + file
            if ($doctor->User && $doctor->User->profiles) {
                $profile = $doctor->User->profiles;

                if ($profile->images) {
                    if ($profile->images->files) {
                        // Delete physical file
                        $filePath = public_path($profile->images->files->image_path);
                        if (file_exists($filePath)) {
                            unlink($filePath);
                        }
                        $profile->images->files->delete();
                    }
                    $profile->images->delete();
                }

                $profile->delete();
            }

            // Delete doctor record
            $doctor->delete();

            // Delete user
            if ($doctor->User) {
                $doctor->User->delete();
            }

            DB::commit();

            return redirect()->route('show.doctors')->with('success', 'Doctor deleted successfully!');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Error deleting doctor: ' . $e->getMessage());
            return redirect()->back()->with('error', 'An error occurred while deleting the doctor.');
        }
    }
}
