<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttendancesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendances', function (Blueprint $table) {
            $table->increments('id');
            $table->string('pin');
            $table->dateTime('date_time');
            $table->integer('verified');
            $table->integer('status');
            $table->integer('work_code');
            $table->boolean('sync')->default(false);
            $table->string('message')->nullable();
            $table->string('employee_name')->nullable();
            $table->string('employee_number')->nullable();
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
        Schema::drop('attendances');
    }
}
