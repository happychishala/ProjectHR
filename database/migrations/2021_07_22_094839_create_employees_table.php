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
            $table->string('firstname', 100);
            $table->string('lastname', 100);
            $table->string('address');
            $table->string('email')->unique();
            $table->Integer('nrc')->unique();
            $table->string('position', 100);
            $table->Integer('mobile');
            $table->Integer('deptID');
            $table->string('gender',100);
            $table->string('marital_status',100);
            $table->timestamps('startDate');
            $table->date('enddate');
            $table->double('salary',15,6);             
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
        Schema::dropIfExists('employees');
    }
}
