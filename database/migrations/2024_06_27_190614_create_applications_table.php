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
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->nullable();
            $table->string('surname')->nullable();
            $table->string('visa_choice')->nullable();
            $table->string('sex')->nullable();
            $table->date('dob')->nullable()->nullable();
            $table->string('marital_status')->nullable();
            $table->string('nationality')->nullable();
            $table->string('state')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->text('special_request')->nullable();
            $table->string('user_ip')->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applications');
    }
};
