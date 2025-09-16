<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $categories = [
            ['nombre' => 'Electrónica', 'descripcion' => 'Dispositivos electrónicos, componentes y accesorios tecnológicos'],
            ['nombre' => 'Mobiliario', 'descripcion' => 'Muebles para oficina, hogar y espacios comerciales'],
            ['nombre' => 'Oficina', 'descripcion' => 'Suministros y materiales para oficina y papelería'],
            ['nombre' => 'Herramientas', 'descripcion' => 'Herramientas manuales y eléctricas para construcción y mantenimiento'],
            ['nombre' => 'Limpieza', 'descripcion' => 'Productos y suministros de limpieza e higiene'],
            ['nombre' => 'Seguridad', 'descripcion' => 'Equipos de protección personal y seguridad industrial'],
            ['nombre' => 'Textil', 'descripcion' => 'Productos textiles, ropa de trabajo y uniformes'],
            ['nombre' => 'Alimentación', 'descripcion' => 'Productos alimenticios no perecederos y bebidas']
        ];

        $category = $this->faker->randomElement($categories);
        
        return [
            'nombre' => $category['nombre'],
            'descripcion' => $category['descripcion'],
            'activo' => $this->faker->boolean(90) // 90% probabilidad de estar activo
        ];
    }
}
