<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('productos', function (Blueprint $table) {
            $table->string('sku', 50)->unique()->after('id');
            $table->text('descripcion')->nullable()->after('nombre');
            $table->integer('stock')->default(0)->after('precio');
            $table->foreignId('category_id')->nullable()->constrained('categories')->onDelete('set null')->after('stock');
            $table->foreignId('supplier_id')->nullable()->constrained('suppliers')->onDelete('set null')->after('category_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('productos', function (Blueprint $table) {
            $table->dropForeign(['category_id']);
            $table->dropForeign(['supplier_id']);
            $table->dropColumn(['sku', 'descripcion', 'stock', 'category_id', 'supplier_id']);
        });
    }
};
