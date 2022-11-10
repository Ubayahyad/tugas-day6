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
    Schema::create('students', function (Blueprint $table) {
      $table->id();
      $table->unsignedBigInteger('major_id');
      $table->unsignedBigInteger('dosen_id')->nullable();
      $table->string('student_name');
      $table->string('email');
      $table->decimal('nrp', 9);
      $table->string('password');
      $table->foreign('major_id')->references('id')->on('majors');
      $table->foreign('dosen_id')->references('id')->on('dosens');
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
    Schema::dropIfExists('students');
  }
};
