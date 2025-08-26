<?php

namespace App\Http\Controllers;

use App\Models\banners;
use App\Models\files;
use App\Models\images;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BannersController extends Controller
{
    public function index()
    {
        $banners = banners::with(['images', 'images.files'])->take(3)->get();
        return view('admin.pages.banners.homepageBanner', compact('banners'));
    }

    public function store(Request $request)
    {
        try {
            $data = $request->validate([
                'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5120',
                'alt_text' => 'nullable|string|max:255',
                'title' => 'required|string|max:255',
                'context' => 'required|string|max:255',
                'location' => 'required|string|max:255',
                'link' => 'required|url|max:255',
            ]);

            DB::beginTransaction();

            //get the current user id
            $user = auth()->user();

            $files = new files();

            if ($request->has('file')) {
                $file = $request->file('file');
                $fileName = time() . '.' . $file->getClientOriginalExtension();
                $filePath = $file->move(public_path('uploads'), $fileName);
                $filePath = 'uploads/' . $fileName;
                $files->image_path = $filePath;
                $files->save();
            }

            $image = new images();

            $image->uploaded_by_id = $user->id ?? null;
            $image->alt_text = $data['alt_text'] ?? null;
            $image->file_id = $files->id;
            $image->save();

            $banner = new banners();

            $banner->title = $request->input('title');
            $banner->context = $request->input('context');
            $banner->location = $request->input('location');
            $banner->link = $request->input('link');
            $banner->image_id = $image->id;
            $banner->save();


            //fresh
            $files->fresh();
            $image->fresh();
            $banner->fresh();

            DB::commit();

            return redirect()->route('show.homepageBanner')->with('success', 'Banner created successfully.');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->withErrors(['error' => 'Failed to create banner: ' . $e->getMessage()]);
        }
    }

    public function show(banners $banners)
    {
        //
    }

    public function update(Request $request, $id)
    {
        try {
            $banner = banners::with(['images', 'images.files'])->findOrFail($id);

            $data = $request->validate([
                'file' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5120',
                'alt_text' => 'nullable|string|max:255',
                'title' => 'required|string|max:255',
                'context' => 'required|string|max:255',
                'location' => 'required|string|max:255',
                'link' => 'required|url|max:255',
            ]);

            DB::beginTransaction();

            // Update file if new one is uploaded
            if ($request->hasFile('file')) {
                $file = $request->file('file');
                $fileName = time() . '.' . $file->getClientOriginalExtension();
                $filePath = $file->move(public_path('uploads'), $fileName);
                $filePath = 'uploads/' . $fileName;

                // Update existing file record or create new
                $fileModel = $banner->images->files ?? new files();
                $fileModel->image_path = $filePath;
                $fileModel->save();

                // Link image to file
                $banner->images->file_id = $fileModel->id;
            }

            // Update image
            if ($banner->images) {
                $banner->images->alt_text = $data['alt_text'] ?? $banner->images->alt_text;
                $banner->images->save();
            }

            // Update banner
            $banner->title = $request->input('title');
            $banner->context = $request->input('context');
            $banner->location = $request->input('location');
            $banner->link = $request->input('link');
            $banner->save();

            DB::commit();

            return redirect()->route('admin.pages.banner.homepageBanner')->with('success', 'Banner updated successfully.');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->withErrors(['error' => 'Failed to update banner: ' . $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            DB::beginTransaction();

            // Find banner with relationships
            $banner = banners::with(['images', 'images.files'])->findOrFail($id);

            if ($banner->images) {
                $image = $banner->images;

                if ($image->files) {
                    $file = $image->files;

                    // Delete physical file from uploads folder
                    if (file_exists(public_path($file->image_path))) {
                        unlink(public_path($file->image_path));
                    }

                    // Delete file record
                    $file->delete();
                }

                // Delete image record
                $image->delete();
            }

            // Finally delete the banner
            $banner->delete();

            DB::commit();

            return redirect()->route('admin.pages.banner.homepageBanner')->with('success', 'Banner deleted successfully.');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->withErrors(['error' => 'Failed to delete banner: ' . $e->getMessage()]);
        }
    }
}
