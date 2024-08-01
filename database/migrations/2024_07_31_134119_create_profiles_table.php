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
      
        Schema::create('profiles', function (Blueprint $table) {
            $table->id(); // Creates an auto-incrementing primary key
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Foreign key to users table
            $table->string('first_name');
            $table->string('last_name');
            $table->text('bio')->nullable(); // Optional field
            $table->string('avatar')->nullable(); // Optional field for avatar URL or path
            $table->timestamps(); // Creates `created_at` and `updated_at` timestamps
        });



    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
