<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOtros extends Migration

{
    public function up()
    {
        if (Schema::hasTable('Otros')){
            Schema::table('Otros', function (Blueprint $table) {
                if (!Schema::hasColumn('idOtros'))
                {
                    $table->increments('idOtros');
                }
                if (!Schema::hasColumn('nomOtros'))
                {
                    $table->string('nomOtros', 255);
                }
                if (!Schema::hasColumn('precio'))
                {
                    $table->float('precio');
                }
            });
        } else {
            Schema::create('Otros', function (Blueprint $table) {
                $table->increments('idOtros');
                $table->string('nomOtros', 255);
                $table->float('precio');
                $table->timestamps();
            });
        }
    }

    public function down()
    {
        if (Schema::hasTable('Otros')) {
            Schema::table('Otros', function (Blueprint $table) {
                Schema::drop('Otros');
            });
        }
    }
}