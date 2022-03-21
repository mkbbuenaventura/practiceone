<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->id();
            // $table->string('f_name');
            // $table->string('mname')->nullable();
            // $table->string('lname');

            $table->string('firstName');
            $table->string('middleName')->nullable();
            $table->string('lastName');
            $table->date('dateOfBirth')->nullable();
            $table->integer('age');
            $table->string('email');
            $table->string('password');
            $table->string('houseUnitNo')->nullable();
            $table->string('floor')->nullable();
            $table->string('buildingName')->nullable();
            $table->string('street')->nullable();
            $table->string('subdivision')->nullable();
            $table->string('barangay')->nullable();
            $table->string('municipalityCity');
            $table->string('province');
            $table->string('country');
            $table->string('zipCode');
            $table->string('userLevel')->nullable();
            $table->string('actveStatus')->nullable();
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
        Schema::dropIfExists('accounts');
    }
}
