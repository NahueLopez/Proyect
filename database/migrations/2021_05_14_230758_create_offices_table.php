<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfficesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offices', function (Blueprint $table) {
            $table->id();
           // $table->foreignId('empresary_id')->constrained('empresaries'); //Aca decimos que que hay una relacion de muchos(office) a una (empresary)
            $table->foreignId('user_id')->constrained('users');
            $table->string('name')->unique();;
            $table->string('adress')->unique();
            $table->bigInteger('phone');
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
        Schema::dropIfExists('offices');
    }
}
