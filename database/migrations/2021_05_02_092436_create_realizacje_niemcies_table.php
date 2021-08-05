<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRealizacjeNiemciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('realizacje_niemcies', function (Blueprint $table) {
            $table->id();
            $table->string('nazwa');
            $table->text('opis');
            $table->string('zdjecie1');
            $table->string('zdjecie2');
            $table->string('zdjecie3');
            $table->string('zdjecie4');
            $table->string('zdjecie5');
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
        Schema::dropIfExists('realizacje_niemcies');
    }
}
