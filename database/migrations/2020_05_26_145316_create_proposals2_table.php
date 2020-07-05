<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProposals2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proposals2', function (Blueprint $table) {
           
            $table->bigIncrements('id');
            $table->date('date_approved');
            $table->string('act_level');
            $table->string('act_category');
            $table->string('organize');
            $table->date('date');
            $table->string('no_participant');
            $table->double('cost', 8, 2);
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
        Schema::dropIfExists('proposals2');
    }
}
