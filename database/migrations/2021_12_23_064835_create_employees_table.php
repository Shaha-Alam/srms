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
            $table->integer('serial');
            $table->string('employee_image');   
            $table->string('employee_name',);
            $table->string('email_addres');
            $table->text('gender');
            $table->double('salary');
            $table->date('birth_date');
            $table->date('join_date');
            
            // $table->string('status')->default('inactive'); join_date
            // $table->string('contact_no',11);
            // $table->string('email_addres');
            // $table->text('address');
            // $table->double('salary');
            // $table->date('birth_date');
            // $table->string('status')->default('inactive');
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
