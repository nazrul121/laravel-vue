<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHospitalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hospitals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('division_id');
            $table->unsignedBigInteger('district_id');
            $table->string('name');
            $table->string('reg');
            $table->string('contacts');
            $table->string('photo');
            $table->string('logo');
            $table->string('open_time');
            $table->string('email');
            $table->string('website');
            $table->enum('ownership',['public','private','semi-public','trust','co-operative']);
            $table->char('est_year',6);
            $table->text('address');
            $table->longText('about');
            $table->enum('is_active', ['1', '0'])->default('1');
            $table->unsignedBigInteger('add_by');
            $table->timestamps();

            $table->foreign('division_id')->references('id')->on('divisions');
            $table->foreign('district_id')->references('id')->on('districts');
            $table->foreign('add_by')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hospitals');
    }
}
