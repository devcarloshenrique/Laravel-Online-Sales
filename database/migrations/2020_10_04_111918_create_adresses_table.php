<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adresses', function (Blueprint $table) {
            $table->increments('id');
            $table->char('zipCode', 15)->nullable(false);
            // logradouro => Nome da Rua
            $table->string('publicPlace', 100)->nullable(true);
            $table->string('complement', 100)->nullable(true);
            // Bairro
            $table->string('neighborhood', 100)->nullable(true);
            $table->string('city', 100)->nullable(false);
            $table->char('uf', 2)->nullable(false);
            $table->char('ddd', 5)->nullable(false);
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
        Schema::dropIfExists('adresses');
    }
}
