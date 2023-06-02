<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('profession');
            $table->string('fb_link');
            $table->string('twt_link');
            $table->string('lkn_link');
            $table->string('gpls_link');
            $table->string('email');
            $table->string('mobile_no');
            $table->string('contact_address');
            $table->string('interest');
            $table->string('image');
            $table->tinyInteger('status')->default('1');
            $table->timestamps();
            $table->SoftDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}
