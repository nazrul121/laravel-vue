<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVolunteersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('volunteers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('volunteer_group_id');
            $table->string('fname');
            $table->string('lname');
            $table->string('sex');
            $table->string('blood_group');
            $table->unsignedBigInteger('division_id');
            $table->unsignedBigInteger('district_id');
            $table->string('status');
            $table->string('photo');
            $table->text('about');
            $table->enum('is_active',['0','1'])->default('1');
            $table->char('sort',5);
            $table->char('add_by',50)->default('self');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('volunteer_group_id')->references('id')->on('volunteer_groups');
            $table->foreign('division_id')->references('id')->on('divisions');
            $table->foreign('district_id')->references('id')->on('districts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('volunteers');
    }
}
