<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCrud extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('crud', function (Blueprint $table) {
          $table->increments('id');
          $table->string('nome',50);
          $table->string('sobrenome',50);
          $table->string('email',100)->unique();
          $table->string('descricao',100)->nullable();
          $table->char('empresa',1)->default(1);
          $table->string('emp_cnpj',15);
          $table->char('tipo',1)->default(1);          
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
        Schema::dropIfExists('crud');
    }
}
