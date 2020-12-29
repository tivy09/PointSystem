<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->String('position')->nullable();
            $table->String('project_id')->nullable();
            $table->integer('department');
            $table->double('salary',8, 2)->default(1200);
            $table->string('phoneNumber');
            $table->string('Avater')->default("default.jpg");
            $table->string('password');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
