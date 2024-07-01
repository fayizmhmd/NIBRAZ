<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create permissions
        $permissions = [
            'dashboard',
            'all_users',
            'subscriptions',
            'plans',
            'permissions'
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }

        // Create super admin role
        $superAdminRole = Role::create(['name' => 'super-admin']);

        // Assign permissions to super admin role
        $superAdminRole->syncPermissions($permissions);

        // Create super admin user
        $superAdmin = User::create([
            'name' => 'Jhon',
            'email' => 'admin@admin.com',
            'phone' => '12345678',
            'gender' => 'MALE',
            'dob' => '10-10-2024',
            'insurance_type' => 'SELF',
            'customer_id' => "FMD" .date('md')."001",
            'is_active' => '1',
            'password' => bcrypt('12345678'), 
        ]);

        // Assign super admin role to user
        $superAdmin->assignRole($superAdminRole);
    }
}
