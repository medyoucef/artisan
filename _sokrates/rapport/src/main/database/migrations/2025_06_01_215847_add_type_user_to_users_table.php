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
    Schema::table('users', function (Blueprint $table) {
        $table->string('type_user')->default('client'); // ou null si tu préfères
    });
}

public function down()
{
    Schema::table('users', function (Blueprint $table) {
        $table->dropColumn('type_user');
    });
}
};
