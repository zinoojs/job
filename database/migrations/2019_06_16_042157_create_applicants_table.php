<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()

    {
        Schema::create('applicants', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->unsignedInteger('user_id')->nullable();
            $table->string('name');
            $table->date('dob');
            $table->string('nrc');
            $table->string('email');
            $table->string('phone');
            $table->string('nationality');
            $table->string('race');
            $table->string('religion');
            $table->string('education');
            $table->enum('marital_status', ['single', 'married']);
            $table->string('township'); // validate to 40 maximum
            $table->text('address');
            $table->string('attachment_file_name')->nullable();
            $table->string('cv_file_name')->nullable();
            $table->unsignedInteger('job_id');
            $table->softDeletes();
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
        Schema::dropIfExists('applicants');
    }
}
