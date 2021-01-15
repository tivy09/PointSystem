<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectEvaluationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_evaluations', function (Blueprint $table) {
            $table->id();
            $table->string('employee_name');
            $table->integer('project_id');
            $table->integer('tasks_id');
            $table->integer('Knowledge');
            $table->integer('Quality');
            $table->integer('Productivity');
            $table->integer('Dependability');
            $table->integer('Attendance');
            $table->integer('Relations');
            $table->integer('Commitment');
            $table->integer('Supervisory');
            $table->integer('Appraisal');
            $table->integer('TotalScore');
            $table->string('feedback')->nullable();
            $table->string('TrainPlan')->nullable();
            $table->string('deadline')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('project_evaluations');
    }
}
