<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFirstSemIndianLanguagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('first_sem_indian_languages', function (Blueprint $table) {
            $table->id();
            $table->string('Student_name');
            $table->string('Reg_No');
            $table->integer('U1');
            $table->integer('IA1')->nullable();
            $table->integer('U2')->nullable();
            $table->integer('IA2')->nullable();
            $table->integer('total')->nullable();
            $table->string('sem')->default(1);
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
        Schema::dropIfExists('first_sem_indian_languages');
    }
}
