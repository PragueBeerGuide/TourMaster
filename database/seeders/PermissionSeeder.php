<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('permissions')->truncate();

        $permissions = [
            '1' => 'owner',
            '2' => 'admin',
            '3' => 'guide'
        ];

        foreach ($permissions as $id => $permission_name) {

            $permission = new Permission();
            $permission->id = $id;
            $permission->name = $permission_name;
            $permission->save();
        }
    }
}
