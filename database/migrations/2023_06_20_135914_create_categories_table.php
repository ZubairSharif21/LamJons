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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->nullable();
            $table->string('last_name',25)->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('musical_genre',25)->nullable();
            $table->string('instrument',25)->nullable();
            $table->string('other_services',25)->nullable();
            $table->string('skill_level',55)->nullable();
            $table->string('message',255)->nullable();
            $table->integer('user_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
