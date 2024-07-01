<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\PermissionHead;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionController extends Controller
{

    public function givePermissions()
    {
        $permissions = Permission::all();
        foreach ($permissions as $permission) {
            $role = Role::findByName('super-admin');
            $role->givePermissionTo($permission);
        }
        $response = ['success' => true, 'data' => 'Permissions Added Successfully'];
        return response()->json($response);
    }
    public function createRole()
    {
        $role = Role::create(['name' => 'trainer']);
        $role->givePermissionTo('plans');
    }

    // public function assignRoleToUser()
    // {
    //     $user = auth()->user(); 
    //     $user->assignRole('admin'); 
    // }

    public function createPermission()
    {
        $permission = Permission::create(['name' => 'reports', 'guard_name' => 'web']);
        // Optionally, you can assign this permission to roles as well
        // $role->givePermissionTo('edit articles');
    }
    public function assignPermissionToUser()
    {
        $user = auth()->user(); // Fetch the user you want to assign the permission to
        $permission = Permission::findOrCreate('reports'); // Find or create the permission
        $user->givePermissionTo($permission); // Assign the permission to the user
        dd($user->getPermissionsViaRoles());
    }
    public function testPermission()
    {
        echo 'test permisssion';
    }

    public function getUserRolesAndPermissions()
    {
        $user = auth()->user();
        $roles = $user->getRoleNames();
        $permissions = $user->getAllPermissions()->pluck('name')->toArray();

        dd([
            'roles' => $roles,
            'permissions' => $permissions,
        ]);
    }
}
