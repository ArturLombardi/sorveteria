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
        Schema::create('attendants', function (Blueprint $table) {
            $table->id();
            $table->foreignId('attendants_id')
                  ->constrained('users'); 
            $table->string('first_name', 25);
            $table->string('last_name', 25);
            $table->string('employee_id', 20)->unique();
            $table->date('hired_date');
            $table->string('department', 50);
            $table->string('phone',20);
            $table->string('institutional_email', 50);
            $table->decimal('salary', 10, 6);
            $table->json('skills')->nullable();
            $table->timestamps(3);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attendants');
    }
};
