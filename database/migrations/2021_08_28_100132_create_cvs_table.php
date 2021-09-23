<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCvsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cvs', function (Blueprint $table) {
            $table->id();
            $table->string("name")->nullable();
            $table->string("email")->nullable();
            $table->string("phone")->nullable();
            $table->string("address")->nullable();
            $table->string("photo")->nullable();
            $table->string("gender")->nullable();
            $table->longText("about")->nullable();
            
            $table->dateTime("birth_date")->nullable();
            $table->longText("coding_languages")->nullable();
            $table->longText("frame_works")->nullable();
            $table->longText("other_skills")->nullable();
            $table->longText("projects")->nullable();
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
        Schema::dropIfExists('cvs');
    }
}
