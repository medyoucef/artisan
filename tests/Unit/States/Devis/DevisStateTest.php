<?php

namespace Tests\Unit\States\Devis;

use App\States\Devis\AccepteState;
use App\States\Devis\EnAttenteState;
use App\States\Devis\InvalidDevisTransition;
use App\States\Devis\RefuseState;
use PHPUnit\Framework\TestCase;

class DevisStateTest extends TestCase
{
    public function test_en_attente_accepts_transitions_to_accepte(): void
    {
        $state = new EnAttenteState();

        $next = $state->accept();

        $this->assertInstanceOf(AccepteState::class, $next);
        $this->assertSame('accepté', $next->name());
    }

    public function test_en_attente_refuses_transitions_to_refuse(): void
    {
        $state = new EnAttenteState();

        $next = $state->refuse();

        $this->assertInstanceOf(RefuseState::class, $next);
        $this->assertSame('refusé', $next->name());
    }

    public function test_en_attente_is_not_final(): void
    {
        $this->assertFalse((new EnAttenteState())->isFinal());
    }

    public function test_accepte_is_final(): void
    {
        $this->assertTrue((new AccepteState())->isFinal());
    }

    public function test_refuse_is_final(): void
    {
        $this->assertTrue((new RefuseState())->isFinal());
    }

    public function test_accepted_devis_cannot_be_accepted_again(): void
    {
        $this->expectException(InvalidDevisTransition::class);

        (new AccepteState())->accept();
    }

    public function test_accepted_devis_cannot_be_refused(): void
    {
        $this->expectException(InvalidDevisTransition::class);

        (new AccepteState())->refuse();
    }

    public function test_refused_devis_cannot_be_accepted(): void
    {
        $this->expectException(InvalidDevisTransition::class);

        (new RefuseState())->accept();
    }

    public function test_refused_devis_cannot_be_refused_again(): void
    {
        $this->expectException(InvalidDevisTransition::class);

        (new RefuseState())->refuse();
    }

    public function test_state_names_match_persisted_values(): void
    {
        $this->assertSame('en_attente', (new EnAttenteState())->name());
        $this->assertSame('accepté', (new AccepteState())->name());
        $this->assertSame('refusé', (new RefuseState())->name());
    }
}
