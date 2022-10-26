<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimauxTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animaux', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('description');
            $table->string('type_maladie');
            $table->date('datedeNaissance');
            $table->date('datedubutTraitement');
            $table->integer('dureeTraitement');
            $table->float('prixTraitement');
          
            $table->integer('age');
            $table->string('espece');
            $table->float('poid');
            $table->bigInteger('local_id')->unsigned();
            $table->foreign('local_id')
                    ->references('id')
                    ->on('locaux')
                    ->onCascade('delete');
        
            $table->timestamps();
        });
    }

    //php arisan migrate

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('animaux');
    }
}
