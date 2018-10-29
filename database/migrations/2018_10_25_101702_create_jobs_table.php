<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->unique();
            $table->text('role_description');
            $table->tinyInteger('listed_by');
            $table->date('listed_on');
            $table->string('country');
            $table->string('region');
            $table->string('employment');
            $table->string('experties');
            $table->string('location_type');
            $table->string('education');
            $table->string('language');
            $table->tinyInteger('sector_id');
            $table->tinyInteger('specializations_id');
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
        Schema::dropIfExists('jobs');
    }
}
