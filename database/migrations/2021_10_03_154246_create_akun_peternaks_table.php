<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAkunPeternaksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('akun_peternaks', function (Blueprint $table) {
            $table->id();
            $table->string('company');
            $table->string('ownerName');
            $table->string('nik')->unique();
            $table->string('npwp')->unique();
            $table->string('phone')->unique();
            $table->string('email')->unique();
            $table->string('pass');
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
        Schema::dropIfExists('akun_peternaks');
    }
}
