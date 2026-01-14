<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $roles = Role::all();
            return response()->json([ 
                'message' => 'Roles retrieved successfully',    
                'roles' => $roles
            ],200);
        } catch (\Throwable $th) {
        return response()->json([
        'error' => 'Failed to retrieve roles',
        'message' => $th->getMessage()
        ],500);
        }
        
    }
    public function store(Request $request){
        try {
            $request->validate([
                'name' => ['required','string']
            ]);
            $role = new Role();
            $role->name = request('name');
            $role->save();
            return response()->json([
                'message' => 'Role created successfully',
                'role' => $role
            ],201);
        } catch (\Throwable $th) {
            return response()->json([
                'error' => 'Failed to create role',
                'message' => $th->getMessage()
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        try {
            $role = Role::findOrFail($id);
            return response()->json([
                'message' => 'Role retrieved successfully',
                'role' => $role
            ],200);
        } catch (\Throwable $th) {
            return response()->json([
                'error' => 'Failed to retrieve role',
                'message' => $th->getMessage()
            ], 500);
        }
    }
    
    public function update(Request $request, $id){
        try {
            $role = Role::findOrFail($id);
            $role->update([
                'name'=>['required','string']
            ]);
            return response()->json([
                'message' => 'Role updated successfully',
                'role' => $role
            ],200);
        } catch (\Throwable $th) {
            return response()->json([
                'error' => 'Failed to update role',
                'message' => $th->getMessage()
            ], 500);
        }
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $role = Role::destroy($id);
            return response()->json([
                'message' => 'Role deleted successfully',
                'role' => $role
            ],200);
        } catch (\Throwable $th) {
            return response()->json([
                'error' => 'Failed to delete role',
                'message' => $th->getMessage()
            ], 500);
        }
    }
}
