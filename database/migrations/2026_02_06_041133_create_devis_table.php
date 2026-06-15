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

            // Relations
            $table->unsignedBigInteger('conversation_id');
            $table->unsignedBigInteger('artisan_id'); // référence à artisans.id
            $table->unsignedBigInteger('client_id');  // référence à users.id

            // Données du devis
            $table->decimal('montant', 10, 2);
            $table->text('description')->nullable();
            $table->string('statut')->default('en_attente'); // en_attente, accepté, refusé

            $table->timestamps();

            // Foreign keys
            $table->foreign('conversation_id')
                  ->references('id')
                  ->on('conversations')
                  ->onDelete('cascade');

            // ✔ CORRECTION IMPORTANTE : artisan_id → artisans.id
            $table->foreign('artisan_id')
                  ->references('id')
                  ->on('artisans')
                  ->onDelete('cascade');

            // client_id → users.id (correct)
            $table->foreign('client_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade');
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
