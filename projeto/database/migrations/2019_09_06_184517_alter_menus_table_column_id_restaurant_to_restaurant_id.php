<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterMenusTableColumnIdRestaurantToRestaurantId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('menus', function (Blueprint $table) {

            $table->dropForeign('menus_id_restaurant_foreign');
            $table->renameColumn('id_restaurant', 'restaurant_id');
            $table->foreign('restaurant_id')->references('id')->on('restaurants');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('menus', function (Blueprint $table) {

            $table->dropForeign('menus_restaurant_id_foreign');
            $table->renameColumn('restaurant_id', 'id_restaurant');
            $table->foreign('id_restaurant')->references('id')->on('restaurants');
        });
    }
}
