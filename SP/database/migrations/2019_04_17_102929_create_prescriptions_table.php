<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrescriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        Schema::create('prescriptions', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');                        
            $table->string('prescription_id');
            $table->date('from_date');
            $table->date('to_date');
            $table->string('additional_information');
            $table->bigInteger('pacient_id')->unsigned();
            $table->bigInteger('medication_id')->unsigned();
            $table->timestamps();            
        });

        Schema::table('prescriptions', function($table) {            
            $table->foreign('pacient_id')->references('id')->on('pacients');
            $table->foreign('medication_id')->references('id')->on('medications');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prescriptions');
    }
}
