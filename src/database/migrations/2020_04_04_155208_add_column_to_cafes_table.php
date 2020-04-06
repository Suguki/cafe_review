<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnToCafesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cafes', function (Blueprint $table) {
            $table->string('place', 256)->after('name');
            $table->integer('food_evaluation')->default(0)->after('place');
            $table->integer('access_evaluation')->default(0)->after('food_evaluation');
            $table->integer('feeling_evaluation')->default(0)->after('access_evaluation');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cafes', function (Blueprint $table) {
            $table->dropColumn('place');
            $table->dropColumn('food_evaluation');
            $table->dropColumn('access_evaluation');
            $table->dropColumn('feeling_evaluation');
        });
    }
}
