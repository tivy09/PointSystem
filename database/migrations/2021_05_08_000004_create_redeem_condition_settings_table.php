<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRedeemConditionSettingsTable extends Migration
{
    public function up()
    {
        Schema::create('redeem_condition_settings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('min_point_to_redeem')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
