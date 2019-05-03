<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username');
            $table->string('a1');
            $table->string('a2');
            $table->string('a3');
            $table->string('a4');
            $table->string('a5');
            $table->string('a6');
            $table->string('a7');
            $table->string('a8');
            $table->string('a9');
            $table->string('a10');
            $table->string('a11');
            $table->string('a12');
            $table->string('a13');
            $table->string('a14');
            $table->string('a15');
            $table->string('a16');
            $table->string('a17');
            $table->string('a18');
            $table->string('a19');
            $table->string('a20');
            $table->integer('Total score');
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
        Schema::dropIfExists('answers');
    }
}
