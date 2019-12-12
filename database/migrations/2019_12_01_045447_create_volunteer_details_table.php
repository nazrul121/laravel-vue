<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVolunteerDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('volunteer_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('volunteer_id');
            $table->string('father');
            $table->string('mother');
            $table->text('present_address');
            $table->string('permanent_address');
            $table->date('birthday');
            $table->text('persent_description');
            $table->timestamps();

            $table->foreign('volunteer_id')->references('id')->on('volunteers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('volunteer_details');
    }
}
