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
        Schema::table('users', function($table) {
            $table->string('profile_image')->nullable();
            $table->text('description')->nullable();
            $table->string('first_image')->nullable();
            $table->string('second_image')->nullable();
            $table->string('privacy')->nullable();
            $table->string('third_image')->nullable();
            $table->string('four_image')->nullable();
            $table->string('five_image')->nullable();
            $table->string('background_image')->nullable();
            $table->string('first_link')->nullable();
            $table->string('second_link')->nullable();
            $table->string('third_link')->nullable();
            $table->string('fourth_link')->nullable();
            $table->string('fifth_link')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
    }
};
