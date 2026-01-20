<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::table('societe_artisan', function (Blueprint $table) {
        $table->timestamp('created_at')->nullable()->after('photo');
    });
}

public function down()
{
    Schema::table('societe_artisan', function (Blueprint $table) {
        $table->dropColumn('created_at');
    });
}
};
