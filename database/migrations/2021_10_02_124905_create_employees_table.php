<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('birthday');
            $table->unsignedInteger('position_id');
            $table->unsignedInteger('department_id');
            $table->unsignedInteger('salary_id');

            $table->timestamps();

            $table->foreign('position_id')->on('positions')->references('id');
            $table->foreign('department_id')->on('departments')->references('id');
            $table->foreign('salary_id')->on('salaries')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
