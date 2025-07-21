<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
   // database/migrations/xxxx_xx_xx_create_rentals_table.php
        public function up()
        {
            Schema::create('rentals', function (Blueprint $table) {
                $table->id();
                $table->foreignId('user_id')->constrained()->onDelete('cascade');
                $table->foreignId('car_id')->constrained()->onDelete('cascade');
                $table->foreignId('driver_id')->nullable()->constrained()->onDelete('set null');
                $table->date('start_date');
                $table->date('end_date');
                $table->integer('total_days');
                $table->decimal('total_price', 12, 2);
                $table->enum('status', ['pending', 'disewa', 'selesai', 'dibatalkan'])->default('pending');
                $table->string('payment_proof')->nullable();
                $table->decimal('denda', 12, 2)->default(0);
                $table->timestamps();
            });
        }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rentals');
    }
};
