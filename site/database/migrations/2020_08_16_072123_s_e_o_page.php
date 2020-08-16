<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SEOPage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('PageSEO', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title', '1000');
            $table->string('Share_title', '1000');
            $table->string('description', '1000');
            $table->string('key_word', '1000');
            $table->string('page_img', '1000');
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
