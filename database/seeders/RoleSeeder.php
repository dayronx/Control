<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
         $role1 = Role::create(['name'=>'Admin']);
         $role2 = Role::create(['name'=>'tecnico']);

         
         Permission::create(['name' => 'admin.perfil.store'])->assignRole($role1);
         Permission::create(['name' => 'admin.perfil.create'])->assignRole($role1);;
         Permission::create(['name' => 'admin.equipos.create'])->assignRole($role1);;
         Permission::create(['name' => 'admin.equipos.destroy'])->assignRole($role1);;
    }
}
