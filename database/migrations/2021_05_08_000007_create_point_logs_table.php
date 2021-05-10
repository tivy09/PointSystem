<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePointLogsTable extends Migration
{
    public function up()
    {
        Schema::create('point_logs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('prize')->nullable();
            $table->integer('voucher')->nullable();
            $table->string('address')->nullable();
            $table->integer('point_amount')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
