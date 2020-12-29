<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_tasks', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('Project_id');
            $table->integer('User_id')->nullable();
            $table->integer('Leader_id')->nullable();
            $table->date('Start_date');
            $table->string('Description');
            $table->string('Status')->nullable();
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
        Schema::dropIfExists('project_tasks');
    }
}
