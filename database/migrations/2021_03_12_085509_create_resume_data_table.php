<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResumeDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resume_data', function (Blueprint $table) {
            $table->id();
            $table->mediumText('description')->nullable()->default('sample.pdf');
            $table->string('resume_file')->nullable()->default('resume_sample.pdf');
            $table->string('file_name')->nullable()->unique();
            $table->string('file_type')->nullable()->default('pdf');
            $table->string('file_extension')->nullable()->default('pdf');
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
        Schema::dropIfExists('resume_data');
    }
}
