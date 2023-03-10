<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedBigInteger('fk_department')->after('phone_number');
            $table->foreign('fk_department')->references('id')->on('departments');
            $table->unsignedBigInteger('fk_designation')->after('fk_department');
            $table->foreign('fk_designation')->references('id')->on('designations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign('users_fk_department_foreign');
            $table->dropColumn('fk_department');
            $table->dropForeign('users_fk_designation_foreign');
            $table->dropColumn('fk_designation');
        });
    }
}
