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
            $table->string('evaluationItem_1',256)->after('place');
            $table->string('evaluationItem_2',256)->after('evaluationItem_1');
            $table->string('evaluationItem_3',256)->after('evaluationItem_2');
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
            $table->dropColumn('evaluationItem_1');
            $table->dropColumn('evaluationItem_2');
            $table->dropColumn('evaluationItem_3');
        });
    }
}
