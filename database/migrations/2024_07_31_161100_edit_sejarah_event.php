<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EditSejarahEvent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('event', function (Blueprint $table) {
            $table->bigInteger('dilihat')->default(0)->after('konten');
        });

        Schema::table('peraturandesa', function (Blueprint $table) {
            $table->bigInteger('dilihat')->default(0)->after('konten');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('event', function (Blueprint $table) {
            $table->dropColumn('dilihat');
        });

        Schema::table('peraturadesa', function (Blueprint $table) {
            $table->dropColumn('dilihat');
        });
    }
}
