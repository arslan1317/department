<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMoreColumToSubdepartment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sub_departments', function (Blueprint $table) {
            $table->string('website')->nullable();
            $table->string('address')->nullable();
            $table->string('telephone')->nullable();
            $table->integer('fax')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sub_departments', function (Blueprint $table) {
            $table->dropColumn(['website'], ['address'], ['telephone'], ['fax']);
        });
    }
}
