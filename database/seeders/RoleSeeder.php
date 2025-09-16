<?php

namespace Database\Seeders;

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
        // Crear roles
        $adminRole = Role::create(['name' => 'admin']);
        $empleadoRole = Role::create(['name' => 'empleado']);

        // Crear permisos
        $permissions = [
            // Permisos de productos
            'productos.index',
            'productos.create',
            'productos.store',
            'productos.show',
            'productos.edit',
            'productos.update',
            'productos.destroy',
            
            // Permisos de categorías
            'categories.index',
            'categories.create',
            'categories.store',
            'categories.show',
            'categories.edit',
            'categories.update',
            'categories.destroy',
            
            // Permisos de proveedores
            'suppliers.index',
            'suppliers.create',
            'suppliers.store',
            'suppliers.show',
            'suppliers.edit',
            'suppliers.update',
            'suppliers.destroy',
            
            // Permisos de usuarios
            'users.index',
            'users.create',
            'users.store',
            'users.show',
            'users.edit',
            'users.update',
            'users.destroy',
            
            // Permisos de dashboard
            'dashboard.admin',
            'dashboard.empleado',
            
            // Permisos de reportes
            'reports.index',
            'reports.generate',
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }

        // Asignar todos los permisos al admin
        $adminRole->givePermissionTo(Permission::all());

        // Asignar permisos limitados al empleado
        $empleadoRole->givePermissionTo([
            'productos.index',
            'productos.show',
            'categories.index',
            'categories.show',
            'suppliers.index',
            'suppliers.show',
            'dashboard.empleado',
        ]);

        $this->command->info('Roles y permisos creados exitosamente!');
        $this->command->info('- Admin: Acceso completo');
        $this->command->info('- Empleado: Solo consulta de inventario');
    }
}
