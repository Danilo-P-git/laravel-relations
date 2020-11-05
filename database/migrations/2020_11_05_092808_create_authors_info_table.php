<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuthorsInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('authors_info', function (Blueprint $table) {
          $table->foreignId('authors_id')->constrained();
          $table->string('nationality',40);
          $table->text('bio')->nullable();
          $table->string('image')->default("https://picsum.photos/200/300");
          $table->boolean('alive')->default(0);
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
        Schema::dropIfExists('authors_info');
    }
}
