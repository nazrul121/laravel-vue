<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBloodDonorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blood_donors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('blood_organization_id');
            $table->unsignedBigInteger('district_id');
            $table->string('status');
            $table->string('location');
            $table->date('last_donation_date');
            $table->enum('is_active',['0','1'])->default('1');
            $table->unsignedBigInteger('add_by')->default('0');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('blood_organization_id')->references('id')->on('blood_organizations');
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
        Schema::dropIfExists('blood_donors');
    }
}
