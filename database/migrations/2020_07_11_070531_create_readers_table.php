<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReadersTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('readers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ip');
            $table->integer('internal_id');
            $table->integer('com_key')->default(0);
            $table->string('description');
            $table->integer('soap_port')->default(80);
            $table->integer('udp_port')->default(4370);
            $table->string('encoding')->default('utf-8');
            $table->boolean('status');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('readers');
    }
}
