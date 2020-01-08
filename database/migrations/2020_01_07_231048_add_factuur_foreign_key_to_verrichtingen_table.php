<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFactuurForeignKeyToVerrichtingenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Verrichtingen', function (Blueprint $table) {
            DB::statement('SET FOREIGN_KEY_CHECKS=0');
            $table->foreign('Factuur')->references('ID')->on('Facturen');
            DB::statement('SET FOREIGN_KEY_CHECKS=1');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('verrichtingen', function (Blueprint $table) {
            Schema::disableForeignKeyConstraints();
            $table->dropForeign('verrichtingen_factuur_foreign');
        });
    }
}
