<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Supplier;
use App\Models\Producto;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Crear roles y permisos primero
        $this->call(RoleSeeder::class);

        // Crear usuarios específicos
        $admin = User::factory()->create([
            'name' => 'Administrador del Sistema',
            'email' => 'admin@demo.com',
            'password' => Hash::make('password'),
            'role' => 'admin'
        ]);
        $admin->assignRole('admin');

        $empleado = User::factory()->create([
            'name' => 'Empleado de Almacén',
            'email' => 'empleado@demo.com',
            'password' => Hash::make('password'),
            'role' => 'empleado'
        ]);
        $empleado->assignRole('empleado');

        // Crear usuarios adicionales
        User::factory(8)->create();

        // Crear categorías predefinidas
        $categories = [
            ['nombre' => 'Electrónica', 'descripcion' => 'Dispositivos electrónicos, componentes y accesorios tecnológicos', 'activo' => true],
            ['nombre' => 'Mobiliario', 'descripcion' => 'Muebles para oficina, hogar y espacios comerciales', 'activo' => true],
            ['nombre' => 'Oficina', 'descripcion' => 'Suministros y materiales para oficina y papelería', 'activo' => true],
            ['nombre' => 'Herramientas', 'descripcion' => 'Herramientas manuales y eléctricas para construcción y mantenimiento', 'activo' => true],
            ['nombre' => 'Limpieza', 'descripcion' => 'Productos y suministros de limpieza e higiene', 'activo' => true],
            ['nombre' => 'Seguridad', 'descripcion' => 'Equipos de protección personal y seguridad industrial', 'activo' => true],
            ['nombre' => 'Textil', 'descripcion' => 'Productos textiles, ropa de trabajo y uniformes', 'activo' => true],
            ['nombre' => 'Alimentación', 'descripcion' => 'Productos alimenticios no perecederos y bebidas', 'activo' => true]
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }

        // Crear proveedores
        Supplier::factory(15)->create();

        // Crear productos usando las categorías y proveedores existentes
        $categoryIds = Category::pluck('id')->toArray();
        $supplierIds = Supplier::pluck('id')->toArray();

        Producto::factory(50)->create([
            'category_id' => function() use ($categoryIds) {
                return $categoryIds[array_rand($categoryIds)];
            },
            'supplier_id' => function() use ($supplierIds) {
                return $supplierIds[array_rand($supplierIds)];
            }
        ]);

        $this->command->info('Base de datos poblada exitosamente!');
        $this->command->info('Usuarios creados:');
        $this->command->info('- Admin: admin@demo.com / password');
        $this->command->info('- Empleado: empleado@demo.com / password');
        $this->command->info('- Categorías: ' . Category::count());
        $this->command->info('- Proveedores: ' . Supplier::count());
        $this->command->info('- Productos: ' . Producto::count());
    }
}
