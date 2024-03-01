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
        Schema::create('challenge_users', function (Blueprint $table) {
            $table->id(); // Primary key column
            $table->timestamps(); // Created_at and updated_at columns
            $table->integer('progress'); // Progress column (commented out)
            $table->boolean('checked'); // Checked column (commented out)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('challenge_users'); // Drop the challenge_users table
    }
};
