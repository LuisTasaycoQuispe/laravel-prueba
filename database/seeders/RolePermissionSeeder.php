<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;


class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // ROLES

        $adminRole = Role::create(['name'=>'admin']);
        $userRole = Role::create(['name'=>'user']);

        // PERMISOS
        $permissionIndexCategory = Permission::create(['name'=>'view categories']);
        $permissionCreateCategory = Permission::create(['name'=>'create categories']);
        $permissionEditCategory = Permission::create(['name'=>'edit categories']);
        $permissionDeleteCategory = Permission::create(['name'=>'delete categories']);



        // SERVICE
        $permissionIndexService = Permission::create(['name'=>'view services']);
        $permissionCreateService = Permission::create(['name'=>'create services']);
        $permissionEditService = Permission::create(['name'=>'edit services']);
        $permissionDeleteService = Permission::create(['name'=>'delete services']);

        
        // POST
        $permissionIndexPost = Permission::create(['name'=>'view Posts']);
        $permissionCreatePost = Permission::create(['name'=>'create Posts']);
        $permissionEditPost = Permission::create(['name'=>'edit Posts']);
        $permissionDeletePost = Permission::create(['name'=>'delete Posts']);


        // PERMISOS PARA USUARIOS
        $permissionIndexUser = Permission::create(['name'=>'view users']);
        $permissionCreateUser = Permission::create(['name'=>'create users']);
        $permissionEditUser = Permission::create(['name'=>'edit users']);
        $permissionDeleteUser = Permission::create(['name'=>'delete users']);
        $permissionAssignRoles = Permission::create(['name'=>'assign roles']);
        $permissionAssignPermissions = Permission::create(['name'=>'assign permissions']);
        

        // ROLES ASIGNADOS

        // ROL PERMISOS

        $adminRole->givePermissionTo(Permission::all());

        // ROL EDITOR
        $userRole->givePermissionTo([
            $permissionIndexCategory,
            $permissionEditCategory,
            $permissionIndexService,
            $permissionEditService,
        ]);

        
    }
}
