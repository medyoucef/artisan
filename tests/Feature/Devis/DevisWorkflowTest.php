<?php

namespace Tests\Feature\Devis;

use App\Models\Artisan;
use App\Models\Conversation;
use App\Models\Devis;
use App\Models\User;
use Tests\TestCase;

class DevisWorkflowTest extends TestCase
{
    private User $client;
    private User $artisanUser;
    private Artisan $artisan;
    private Conversation $conversation;
    private Devis $devis;

    protected function setUp(): void
    {
        parent::setUp();

        $this->client      = User::factory()->create();
        $this->artisanUser = User::factory()->create();

        $this->artisan = Artisan::factory()->create([
            'user_id' => $this->artisanUser->id,
            'nom'     => $this->artisanUser->name,
        ]);

        $this->conversation = Conversation::create([
            'user_id'    => $this->client->id,
            'artisan_id' => $this->artisan->id,
        ]);

        $this->devis = Devis::create([
            'conversation_id' => $this->conversation->id,
            'artisan_id'      => $this->artisanUser->id,
            'client_id'       => $this->client->id,
            'montant'         => 250.00,
            'description'     => 'Devis test',
            'statut'          => 'en_attente',
        ]);
    }

    public function test_client_can_accept_a_pending_devis(): void
    {
        $response = $this->actingAs($this->client)
            ->post(route('devis.accepter', $this->devis->id));

        $response->assertRedirect();
        $response->assertSessionHas('success');
        $this->assertSame('accepté', $this->devis->fresh()->statut);
    }

    public function test_client_can_refuse_a_pending_devis(): void
    {
        $response = $this->actingAs($this->client)
            ->post(route('devis.refuser', $this->devis->id));

        $response->assertRedirect();
        $response->assertSessionHas('success');
        $this->assertSame('refusé', $this->devis->fresh()->statut);
    }

    public function test_accepting_an_already_accepted_devis_returns_an_error(): void
    {
        $this->devis->update(['statut' => 'accepté']);

        $response = $this->actingAs($this->client)
            ->post(route('devis.accepter', $this->devis->id));

        $response->assertRedirect();
        $response->assertSessionHas('error');
        $this->assertSame('accepté', $this->devis->fresh()->statut);
    }

    public function test_refusing_an_already_accepted_devis_returns_an_error(): void
    {
        $this->devis->update(['statut' => 'accepté']);

        $response = $this->actingAs($this->client)
            ->post(route('devis.refuser', $this->devis->id));

        $response->assertRedirect();
        $response->assertSessionHas('error');
        $this->assertSame('accepté', $this->devis->fresh()->statut);
    }

    public function test_a_non_client_cannot_accept_a_devis(): void
    {
        $intruder = User::factory()->create();

        $response = $this->actingAs($intruder)
            ->post(route('devis.accepter', $this->devis->id));

        $response->assertForbidden();
        $this->assertSame('en_attente', $this->devis->fresh()->statut);
    }
}
