<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Supplier;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Producto>
 */
class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $productos = [
            // Electrónica
            'Laptop Dell Inspiron 15', 'Monitor Samsung 24"', 'Teclado Mecánico RGB', 'Mouse Óptico Inalámbrico',
            'Impresora HP LaserJet', 'Router WiFi TP-Link', 'Disco Duro Externo 1TB', 'Memoria USB 64GB',
            // Mobiliario
            'Escritorio Ejecutivo', 'Silla Ergonómica', 'Estantería Metálica', 'Mesa de Reuniones',
            'Archivador 4 Cajones', 'Sillón de Espera', 'Biombo Divisorio', 'Armario de Oficina',
            // Oficina
            'Papel A4 500 Hojas', 'Bolígrafos Azules Pack 10', 'Carpetas Colgantes', 'Grapadora Industrial',
            'Calculadora Científica', 'Perforadora 2 Huecos', 'Clips Metálicos', 'Etiquetas Adhesivas',
            // Herramientas
            'Taladro Eléctrico', 'Martillo de Acero', 'Destornillador Set', 'Llave Inglesa Ajustable',
            'Sierra Eléctrica', 'Nivel de Burbuja', 'Alicates Universales', 'Cinta Métrica 5m',
            // Limpieza
            'Detergente Industrial 5L', 'Escoba de Cerdas', 'Fregona Microfibra', 'Cubo con Escurridor',
            'Papel Higiénico Industrial', 'Jabón Líquido 1L', 'Desinfectante Multiusos', 'Guantes de Látex',
            // Seguridad
            'Casco de Seguridad', 'Chaleco Reflectante', 'Gafas Protectoras', 'Botas de Seguridad',
            'Extintor ABC 6kg', 'Señal de Emergencia', 'Botiquin Primeros Auxilios', 'Mascarilla FFP2'
        ];

        $nombre = $this->faker->randomElement($productos);
        $precio = $this->faker->randomFloat(2, 5, 2000);
        $stock = $this->faker->numberBetween(0, 500);
        
        return [
            'sku' => strtoupper($this->faker->bothify('???-####')),
            'nombre' => $nombre,
            'descripcion' => $this->faker->sentence(8),
            'cantidad' => $stock, // Mantenemos cantidad por compatibilidad
            'precio' => $precio,
            'stock' => $stock,
            'category_id' => Category::factory(),
            'supplier_id' => Supplier::factory()
        ];
    }
}
