<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToPrizesTable extends Migration
{
    public function up()
    {
        Schema::table('prizes', function (Blueprint $table) {
            $table->unsignedBigInteger('type_id')->nullable();
            $table->foreign('type_id', 'type_fk_3855558')->references('id')->on('point_redeem_types');
        });
    }
}
