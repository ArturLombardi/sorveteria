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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
                  ->constrained('users');
            $table->string('country_code', 3);
            $table->string('state',50);
            $table->string('city',50);
            $table->enum('client_id_type', ['cpf', 'cnpj','ssn','ein','other']);
            $table->string('postal_code', 20);
            $table->string('address', 120);
            $table->string('number', 10);
            $table->string('complement', 50)->nullable();
            $table->timestamps(3);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
