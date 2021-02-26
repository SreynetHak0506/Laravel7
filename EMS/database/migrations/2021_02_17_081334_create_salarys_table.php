<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalarysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salarys', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('release_date');
            $table->date('paid_date');
            $table->double('basic_salary');
            $table->string('note')->nullable();
            $table->unsignedBigInteger('employee_id');
            $table->foreign('employee_id')->unsigned()
            ->references('id')
            ->on('employees')
            ->onDelete('CasCade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('salarys');
    }
}
