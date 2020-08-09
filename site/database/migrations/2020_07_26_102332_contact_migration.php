<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ContactMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Registion',function (Blueprint $table){
            $id = $table->bigIncrements('id');
            $userName = $table->string('UserName');
            $password = $table->string('Password');
            $phone = $table->string('Phone');
            $bkas = $table->string('BkasNo');
            $transitionid = $table->string('TranId');



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
