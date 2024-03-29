<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRssLoadListsTableColumnImgDomPath extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('rss_load_lists', function (Blueprint $table) {
            $table->text('img_dom_path')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('rss_load_lists', function (Blueprint $table) {
            $table->dropColumn('img_dom_path');
        });
    }
}
