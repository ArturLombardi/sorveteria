<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Schema\ForeignKeyDefinition;
use Illuminate\Support\Facades\Schema;
use League\CommonMark\Reference\Reference;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
             $table->foreignId('user_id')
                   ->constrained('users');
            $table->string('first_name', 25);
            $table->string('last_name', 25);
            $table->string('perfil_name', 50)->unique();
            $table->string('cpf',11)->unique();
            $table->date('birthday');
            $table->string('phone',20)->nullable();
            $table->string('gender',10)->nullable();
            $table->json('preferences')->nullable();
            $table->timestamps(3);
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
