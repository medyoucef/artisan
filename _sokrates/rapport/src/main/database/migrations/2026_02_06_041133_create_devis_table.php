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
    Schema::create('devis', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('conversation_id');
        $table->unsignedBigInteger('artisan_id'); // user_id de l'artisan
        $table->unsignedBigInteger('client_id');  // user_id du client

        $table->decimal('montant', 10, 2);
        $table->text('description')->nullable();
        $table->string('statut')->default('en_attente'); // en_attente, accepté, refusé

        $table->timestamps();

        $table->foreign('conversation_id')->references('id')->on('conversations')->onDelete('cascade');

        $table->foreign('artisan_id')->references('id')->on('users')->onDelete('cascade');
        $table->foreign('client_id')->references('id')->on('users')->onDelete('cascade');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('devis');
    }
};
