<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorsTable extends Migration
{
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->id(); // Primary Key (auto-incrementing)
            $table->string('license_number');
            $table->string('hospital');
            $table->string('about');
            $table->integer('years_of_experience'); // Adjust type if needed (e.g., decimal)
            $table->date('years_joined');
            $table->boolean('is_certified');

            // Foreign key constraints (adjust table names as per your schema)
            $table->foreignId('specialization_id')->constrained('specializations')->cascadeOnDelete();
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('doctors');
    }
}
