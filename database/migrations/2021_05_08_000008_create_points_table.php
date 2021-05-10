<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePointsTable extends Migration
{
    public function up()
    {
        Schema::create('points', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('pending_point')->nullable();
            $table->integer('activate_point')->nullable();
            $table->integer('expired_point')->nullable();
            $table->datetime('activate_date')->nullable();
            $table->datetime('expired_date')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
