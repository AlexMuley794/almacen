<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Supplier>
 */
class SupplierFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $companies = [
            'TechSupply S.L.', 'Mobiliario Empresarial', 'Oficina Total', 'Herramientas Pro',
            'Limpieza Industrial', 'Seguridad Laboral', 'Textiles Corporativos', 'Distribuciones Norte',
            'Suministros del Sur', 'Electrónica Avanzada', 'Muebles y Más', 'Papelería Central',
            'Equipos y Herramientas', 'Higiene Profesional', 'Protección Total', 'Uniformes Empresariales'
        ];

        return [
            'nombre' => $this->faker->randomElement($companies),
            'contacto' => $this->faker->name(),
            'telefono' => $this->faker->phoneNumber(),
            'email' => $this->faker->companyEmail(),
            'direccion' => $this->faker->address(),
            'activo' => $this->faker->boolean(95) // 95% probabilidad de estar activo
        ];
    }
}
