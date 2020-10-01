<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('employees', function (Blueprint $table) {

        $table -> foreign('location_id', "emp_loc")
               -> references('id')
               -> on('locations');


      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('employees', function (Blueprint $table) {

        $table -> dropForeign("emp_loc");


      });

    }
}
