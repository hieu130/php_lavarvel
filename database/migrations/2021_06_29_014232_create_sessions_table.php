<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()

    {
        Schema::create('sessions', function (Blueprint $table) {
            $table->string("role")->default("USER")->after("email"); //thêm 1 colum mới
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user',function (Blueprint $table){
        $table->dropColumn("role");
    });
    }
}
