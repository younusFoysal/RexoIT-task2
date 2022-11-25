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
        Schema::create('wallet', function (Blueprint $table) {
            //$table->id();

            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->bigInteger('salary_amount');
            $table->bigInteger('cash_amount');
            $table->string('status');
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });

        DB::table('wallet')->insert([
            ['salary_amount' => '17', 'public' => true],
            ['salary_amount' => '22', 'public' => true],
            ['salary_amount' => '10', 'public' => false],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wallet');
    }
};
