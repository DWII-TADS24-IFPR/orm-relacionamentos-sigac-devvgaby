<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Permission;
use App\Models\Role;
use App\Models\Resource;
class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role = Role::first(); // admin
        $resource = Resource::first(); // comprovante

        Permission::create([
            'role_id' => $role->id,
            'resource_id' => $resource->id,
            'permission' => true,
        ]);
    }
}
