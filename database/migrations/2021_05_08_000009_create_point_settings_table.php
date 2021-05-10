<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePointSettingsTable extends Migration
{
    public function up()
    {
        Schema::create('point_settings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->float('exchange_rate', 5, 2);
            $table->integer('earn_amount');
            $table->integer('enable');
            $table->integer('display');
            $table->integer('point_period');
            $table->integer('point_status');
            $table->integer('point_activate_period');
            $table->datetime('point_activate_date')->nullable();
            $table->float('earn_rate', 15, 2)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
