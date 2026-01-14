<?php

namespace App\Http\Controllers;

// Make sure to import the User model

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller // Rename the controller to UserController
{
    /**
     * List all users
     */
    public function index()
    {
        try {
            $user = User::with('role')->get();
            return response()->json([
                'message' => 'Users retrieved successfully',
                'user' => $user
            ],201);
        } catch (\Throwable $th) {
            return response()->json([
                'error' => 'Failed to retrieve users',
                'message' => $th->getMessage()
            ], 500);
        }
    }

    /**
     * Create a new user
     */
    public function store(Request $request)
    {
        try {
            $request->validate([
                'name' => ['required','string'],
                'email' => ['required','email','unique:users,email'],
                'password' => ['required','confirmed','min:3'],
                'role_id' => ['required','exists:roles,id']
            ]);
            $user = new User();
            $user->name = request('name');
            $user->email = request('email');
            $user->password = Hash::make(request('password'));
            $user->role_id = request('role_id');
            $user->save();
            return response()->json([
                'message' => 'User created successfully',
                'user' => $user
            ],201);
       } catch (\Throwable $th) {
            return response()->json([
                'error' => 'Failed to create user',
                'message' => $th->getMessage()
            ], 500);
       }
    }

    /**
     * Show a single user
     */
    public function show($id)
    {
        try {
            $user = User::with('role')->findOrFail($id);
            return response()->json($user, 200);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'User not found',
                'error'   => $e->getMessage()
            ], 404);
        }
    }

    /**
     * Update a user
     */
    public function update(Request $request, $id)
    {
        try {
            $user = User::findOrFail($id);

            $validated = $request->validate([
                'name' => ['sometimes','string'],
                'email' => ['sometimes','email','unique:users,email,'.$id],
                'password' => ['sometimes','confirmed','min:3'],
                'role_id' => ['sometimes','exists:roles,id']
            ]);

            if(isset($validated['name'])) $user->name = $validated['name'];
            if(isset($validated['email'])) $user->email = $validated['email'];
            if(isset($validated['password'])) $user->password = Hash::make($validated['password']);
            if(isset($validated['role_id'])) $user->role_id = $validated['role_id'];

            $user->save();

            return response()->json([
                'message' => 'User updated successfully',
                'data'    => $user
            ], 200);

        } catch (\Illuminate\Validation\ValidationException $ve) {
            return response()->json([
                'message' => 'Validation failed',
                'errors'  => $ve->errors()
            ], 422);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Failed to update user',
                'error'   => $e->getMessage()
            ], 500);
        }
    }


    /**
     * Delete a user
     */
    public function destroy($id)
    {
        try {
            $user = User::findOrFail($id);
            $user->delete();

            return response()->json([
                'message' => 'User deleted successfully'
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Failed to delete user',
                'error'   => $e->getMessage()
            ], 500);
        }
    }
}
