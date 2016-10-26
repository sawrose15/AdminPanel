<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCases extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cases', function (Blueprint $table) {

            $table->increments('id');
            $table->string('subject');
            $table->string('status');
            $table->string('priority');
            $table->string('case_owner');
            $table->string('case_reason');
            $table->string('type');
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
        Schema::DropIfExists('cases') ;
    }
}
