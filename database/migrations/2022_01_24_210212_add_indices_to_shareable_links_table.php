<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIndicesToShareableLinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('shareable_links', function (Blueprint $table) {
            $table->index('uuid');
            $table->index(['shareable_type', 'shareable_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('shareable_links', function (Blueprint $table) {
            $table->dropIndex('shareable_links_uuid_index');
            $table->dropIndex(['shareable_type', 'shareable_id']);
        });
    }
}