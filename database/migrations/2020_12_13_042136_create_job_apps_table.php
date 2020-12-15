<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobAppsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_apps', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('location');
            $table->integer('types');
            $table->string('description');
            $table->string('department');
            $table->integer('JobCPeople');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('job_apps');
    }
}
