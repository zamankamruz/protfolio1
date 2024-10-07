<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutsTable extends Migration
{
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->id(); // Creates an auto-incrementing primary key
            $table->string('title')->nullable(false); // Title field
            $table->text('description')->nullable(false); // Description field
            $table->string('profile_image')->nullable(); // Profile image field
            $table->string('name')->nullable(false); // Name field
            $table->text('about')->nullable(false); // About field
            $table->string('birthday')->nullable(false); // Birthday field
            $table->string('website')->nullable(false); // Website field
            $table->string('phone')->nullable(false); // Phone field
            $table->string('city')->nullable(false); // City field
            $table->integer('age')->nullable(false); // Age field
            $table->string('degree')->nullable(false); // Degree field
            $table->string('email')->nullable(false); // Email field
            $table->string('freelance')->nullable(false); // Freelance field
            $table->text('summary')->nullable(false); // Summary field
            $table->timestamps(); // Creates created_at and updated_at timestamps
        });
    }

    public function down()
    {
        Schema::dropIfExists('abouts'); // Drop the table if it exists
    }
}

