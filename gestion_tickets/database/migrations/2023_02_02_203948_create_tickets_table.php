<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('tickets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('number_ticket')->unique();
            $table->string('title');
            $table->longText('description');
            $table->string('pice')->nullable();
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedInteger('csc_id');
            $table->foreign('csc_id')->references('id')->on('cscs');
            $table->unsignedInteger('etat_id');
            $table->foreign('etat_id')->references('id')->on('etats');
            $table->unsignedInteger('categorie_id');
            $table->foreign('categorie_id')->references('id')->on('categories');
            $table->unsignedInteger('sous_categorie_id');
            $table->foreign('sous_categorie_id')->references('id')->on('sous_categories');
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
        Schema::dropIfExists('tickets');
    }
};
