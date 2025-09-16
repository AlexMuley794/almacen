<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $fillable = [
        'sku',
        'nombre',
        'descripcion',
        'cantidad',
        'precio',
        'stock',
        'category_id',
        'supplier_id'
    ];

    protected $casts = [
        'precio' => 'decimal:2'
    ];

    /**
     * Relación con categoría
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Relación con proveedor
     */
    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }
}



