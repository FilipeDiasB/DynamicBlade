<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomemMulhersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homem_mulhers', function (Blueprint $table) {
            $table->id();
            $table->string('mulher_input')->nullable();
            $table->string('homem_input')->nullable();
            $table->string('homem')->nullable();
            $table->string('mulher')->nullable();
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
        Schema::dropIfExists('homem_mulhers');
    }
}
