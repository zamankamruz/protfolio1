<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResumesTable extends Migration
{
    public function up()
    {
        Schema::create('resumes', function (Blueprint $table) {
            $table->id();
            $table->text('resumeintro')->nullable();
            $table->string('summary')->nullable();
            $table->text('introduction')->nullable();
            $table->string('address');
            $table->string('phone');
            $table->string('email');
            $table->timestamps();
        });

        Schema::create('educations', function (Blueprint $table) {
            $table->id();
            $table->string('degree');
            $table->string('start_year');
            $table->string('end_year');
            $table->string('institution');
            $table->timestamps();
        });

        Schema::create('experiences', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('company');
            $table->string('start_year');
            $table->string('end_year');
            $table->text('description');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('resumes');
        Schema::dropIfExists('educations');
        Schema::dropIfExists('experiences');
    }
}
