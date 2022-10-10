<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('favoritecontacts', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nulable();
            $table->string('email')->nulable();
            $table->string('address')->nulable();
            $table->string('phone')->nulable();                       
            $table->string('image')->nulable();            
            $table->string('fb_id')->nulable();            
            $table->string('ig_id')->nulable();          
            $table->string('user_id');          
            $table->string('contact_id');          
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
        Schema::dropIfExists('favoritecontacts');
    }
};
