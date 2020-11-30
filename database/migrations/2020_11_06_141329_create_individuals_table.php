<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndividualsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('individuals', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('profession_id');
            $table->foreignId('education_id');
            $table->foreignId('marital_id');
            $table->foreignId('religion_id');
            $table->foreignId('relation_id');
            $table->foreignId('family_card_id');
            $table->bigInteger('nik');
            $table->boolean('gender');
            $table->date('date_of_birth');
            $table->boolean('citizenship');
            $table->string('address');
            $table->string('father');
            $table->string('mother');
            $table->softDeletes();
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
        Schema::dropIfExists('individuals');
    }
}
