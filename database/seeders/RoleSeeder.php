<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Creando Rol Admin
        $admin = Role::create(['name' => 'Admin']);
        $editor = Role::create(['name' => 'Editor']);

        Permission::create(['name' => 'admin.home'])->syncRoles([$admin, $editor]);

        Permission::create(['name' => 'admin.roles.index'])->syncRoles([$admin, $editor]);
        Permission::create(['name' => 'admin.roles.create'])->syncRoles([$admin, $editor]);
        Permission::create(['name' => 'admin.roles.edit'])->syncRoles([$admin, $editor]);
        Permission::create(['name' => 'admin.roles.destroy'])->syncRoles([$admin, $editor]);
    }
}
