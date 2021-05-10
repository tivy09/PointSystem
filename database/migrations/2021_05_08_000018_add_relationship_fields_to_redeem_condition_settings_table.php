<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToRedeemConditionSettingsTable extends Migration
{
    public function up()
    {
        Schema::table('redeem_condition_settings', function (Blueprint $table) {
            $table->unsignedBigInteger('type_id')->nullable();
            $table->foreign('type_id', 'type_fk_3855567')->references('id')->on('point_redeem_types');
        });
    }
}
