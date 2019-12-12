<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHospitalHosTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hospital_hosType', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('hosType_id');
            $table->unsignedBigInteger('hospital_id');
           
            $table->foreign('hosType_id')->references('id')->on('hosTypes');
            $table->foreign('hospital_id')->references('id')->on('hospitals');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hospital_hosType');
    }
}
