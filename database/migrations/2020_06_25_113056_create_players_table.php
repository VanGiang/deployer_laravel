<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('nickname')->nullable();
            $table->string('position')->nullable();
            $table->string('avatar')->nullable();
            $table->integer('number')->nullable();
            $table->date('birthday')->nullable();
            $table->string('address')->nullable();
            $table->tinyInteger('role')->default(0)
                ->comment('0: player, 1: captain, 2: subcaptain, 3: coach, 4: donor, 5: supporter');
            $table->bigInteger('user_id')->nullable();

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
        Schema::dropIfExists('players');
    }
}
