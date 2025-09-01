<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('admin.pages.UserManagement.UserManagement', compact('users'));
    }

    public function store(Request $request)
    {
        try {
            DB::beginTransaction();

            $user = new User();

            $user->username = $request->input('username');
            $user->email = $request->input('email');
            $user->password = Hash::make($request->input('password'));
            $user->is_active = '1';

            $user->save();

            DB::commit();

            return view('admin.pages.UserManagement.UserManagement');
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }

    public function update(Request $request, $id)
    {
        try {

            $user = User::findOrFail($id);

            $data = $request->validate([
                'username' => 'required|string|max:255',
                'email' => 'required|string|max:255',
                'password' => 'nullable|string|min:8|max:255',
            ]);

            DB::beginTransaction();

            $user->username = $data['username'];
            $user->email = $data['email'];

            if ($request->filled('password')) {
                $user->password = Hash::make($data['password']);
            } else {
                $user->password = Hash::make('password123');
            }


            $user->is_active = 1;

            $user->save();

            DB::commit();

            return redirect()->route('show.users')->with('success', 'User updated successfully.');
        } catch (\Throwable $th) {
            DB::rollBack();

            @dd($th->getMessage());

            throw $th;
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            DB::beginTransaction();

            $user = User::findOrFail($id);
            $user->delete();

            DB::commit();

            return redirect()->route('show.users');
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }
}
