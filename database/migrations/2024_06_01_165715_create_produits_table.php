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
        Schema::create('produits', function (Blueprint $table) {
            $table->id();
            $table->string('Nom');
            $table->decimal('PrixDAchat', 10, 2); 
            $table->decimal('PrixDVente', 10, 2); 
            $table->text('Alimentation')->nullable();
            $table->text('Description')->nullable();
            $table->string('Code_Barre_ean_13')->unique();
            $table->string('image')->nullable();
            $table->timestamps();;
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produits');
    }
};
