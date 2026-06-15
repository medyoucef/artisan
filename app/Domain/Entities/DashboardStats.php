<?php

namespace App\Domain\Entities;

class DashboardStats
{
    public int $users;
    public int $artisans;
    public int $societes;
    public int $messages;
    public int $categories;
    public int $devis;

    public function __construct($users, $artisans, $societes, $messages, $categories, $devis)
    {
        $this->users      = $users;
        $this->artisans   = $artisans;
        $this->societes   = $societes;
        $this->messages   = $messages;
        $this->categories = $categories;
        $this->devis      = $devis;
    }
}
