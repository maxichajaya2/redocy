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
     */
    public function run(): void
    {
        //

        $administrador = Role::create(['name' => 'Admintrador']);
        $estudiante = Role::create(['name' => 'Estudiante']);
        $escuela = Role::create(['name' => 'Escuela']);
        $biblioteca = Role::create(['name' => 'Biblioteca']);
        $uoari = Role::create(['name' => 'Uoari']);

        Permission::create(['name' => 'administrador.index']);
        Permission::create(['name' => 'estudiante.index']);







    }
}
