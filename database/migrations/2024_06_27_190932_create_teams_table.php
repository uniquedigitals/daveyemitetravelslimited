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
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('first_name')->nullable();
            $table->string('middle_name')->nullable();
            $table->string('surname');
            $table->string('sex')->nullable();
            $table->string('marital_status')->nullable();
            $table->date('dob');
            $table->string('nationality')->nullable();
            $table->string('state')->nullable();
            $table->string('religion')->nullable();
            $table->date('employment_date')->nullable();
            $table->string('job_role')->nullable();
            $table->string('academic_qualification')->nullable();
            $table->string('course')->nullable();
            $table->string('institution')->nullable();
            $table->date('year_graduated')->nullable();
            $table->string('home_address')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('webmail')->nullable();
            $table->string('role')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teams');
    }
};
