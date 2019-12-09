<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id');
            $table->bigInteger('department_id');
            $table->tinyInteger('shift');
            $table->integer('intake');
            $table->year('passing_year')->nullable();
            $table->string('university_id');
            $table->tinyInteger('blood_group')->nullable();
            $table->string('mobile');
            $table->text('present_address')->nullable();
            $table->text('permanent_address')->nullable();
            $table->string('nationality')->nullable();
            $table->string('current_city')->nullable();
            $table->string('identity_type')->nullable();
            $table->integer('identity_id')->nullable();
            $table->string('meta')->nullable();
            $table->string('facebook_url')->nullable();
            $table->string('linked_in_url')->nullable();
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
        Schema::dropIfExists('user_profiles');
    }
}
