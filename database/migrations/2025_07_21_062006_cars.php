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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('brand');
            $table->string('plate_number')->unique();
            $table->integer('year');
            $table->enum('status', ['tersedia', 'disewa'])->default('tersedia');
            $table->decimal('price_per_day', 10, 2);
            $table->decimal('denda_per_hari', 10, 2);
            $table->enum('kategori',['sport car','city car']);
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
