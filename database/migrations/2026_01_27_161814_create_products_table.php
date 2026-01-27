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
    Schema::create('products', function (Blueprint $table) {
        $table->id(); // Identifiant unique (géré automatiquement)

        $table->string('nom');           // Le nom du produit
        $table->text('description')->nullable(); // Description (facultative)
        $table->string('reference')->unique();   // Le code barre ou SKU unique
        $table->integer('quantite');      // Nombre d'articles en stock
        $table->decimal('prix', 10, 2);   // Prix (ex: 99.50)

        $table->timestamps(); // Crée automatiquement 'created_at' et 'updated_at'
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
