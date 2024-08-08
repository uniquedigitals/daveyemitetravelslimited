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
        Schema::create('homes', function (Blueprint $table) {
            $table->id();
            $table->string('site_name')->nullable();
            $table->string('site_title')->nullable();
            $table->string('site_description')->nullable();
            $table->string('light_logo')->nullable();
            $table->string('dark_logo')->nullable();
            $table->string('favicon')->nullable();
            $table->string('address')->nullable();
            $table->string('address_url')->nullable();
            $table->string('phone_one')->nullable();
            $table->string('phone_two')->nullable();
            $table->string('phone_three')->nullable();
            $table->string('email_one')->nullable();
            $table->string('email_two')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('homes');
    }
};
