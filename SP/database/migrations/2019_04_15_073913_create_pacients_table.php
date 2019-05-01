<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePacientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        Schema::create('pacients', function (Blueprint $table) {            
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');            
            $table->string('name');
            $table->string('surname');
            $table->integer('age');
            $table->integer('height');
            $table->integer('weight');
            $table->integer('condition');
            $table->boolean('treatment_done')->default(false);
            $table->string('additional_information');
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
        Schema::dropIfExists('pacients');
    }
}
