<?php

namespace App\Http\Controllers;

use App\Models\roles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    // Show login page
    public function showLoginForm()
    {
        return view('admin.auth.login');
    }

    // Handle login
    public function login(Request $request, User $user)
    {
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();

        // Collection data of the user
        $user_roles = $user->user_roles;


        // Map all role descriptions to lowercase
        $roles = $user_roles->map(function ($role) {
            return strtolower($role->roles->role_descriptions->description);
        });


        // Logic gate: check if at least one role equals "admin"
        $hasAdminRole = $roles->contains(function ($role) {
            return $role === 'admin';
        });

        if (!$hasAdminRole) {
            return back()->withErrors([
                'email' => 'You do not have admin access.',
            ]);
        }

        // Attempt login
        if (Auth::attempt($request->only('email', 'password'))) {
            $request->session()->regenerate();

            return redirect()->intended('admin/homepageBanner')->with('success', 'Logged in successfully!');
        }

        return back()->withErrors([
            'email' => 'Invalid credentials.',
        ]);
    }

    // Handle logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login')->with('success', 'Logged out successfully!');
    }
}
