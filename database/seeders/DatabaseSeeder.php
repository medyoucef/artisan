<?php

namespace Database\Seeders;

use App\Models\Artisan;
use App\Models\Conversation;
use App\Models\Devis;
use App\Models\Profession;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    private function AdminUsers(): void
    {
        User::updateOrCreate(
            ['email' => 'admin1@test.com'],
            [
                'name' => 'Admin admin1',
                'password' => 'password123',
                'type_user' => 'client',
                'email_verified_at' => now(),
            ]
        );
        User::updateOrCreate(
            ['email' => 'admin2@test.com'],
            [
                'name' => 'Admin admin2',
                'password' => 'password123',
                'type_user' => 'client',
                'email_verified_at' => now(),
            ]
        );
        User::updateOrCreate(
            ['email' => 'admin3@test.com'],
            [
                'name' => 'Admin admin3',
                'password' => 'password123',
                'type_user' => 'client',
                'email_verified_at' => now(),
            ]
        );
    }

    /**
     * Same logins as gatling/resources/data/artisans.csv;
     * villes 1–5 : lignes 2–6 de cities.csv ; villes 6–9 : Gatineau, Trois-Rivieres, Terrebonne, Repentigny (lignes 7–8 et 10–11).
     */
    private function artisanUsers(): void
    {
        $user1 = User::updateOrCreate(
            ['email' => 'artisan1@test.com'],
            [
                'name' => 'Artisan artisan1',
                'password' => 'password123',
                'type_user' => 'artisan',
                'email_verified_at' => now(),
            ]
        );
        $this->linkArtisanProfile($user1, 'Montreal', $this->professionIdForGatling('Plombier'));

        $user2 = User::updateOrCreate(
            ['email' => 'artisan2@test.com'],
            [
                'name' => 'Artisan artisan2',
                'password' => 'password123',
                'type_user' => 'artisan',
                'email_verified_at' => now(),
            ]
        );
        $this->linkArtisanProfile($user2, 'Quebec', $this->professionIdForGatling('Electricien'));

        $user3 = User::updateOrCreate(
            ['email' => 'artisan3@test.com'],
            [
                'name' => 'Artisan artisan3',
                'password' => 'password123',
                'type_user' => 'artisan',
                'email_verified_at' => now(),
            ]
        );
        $this->linkArtisanProfile($user3, 'Laval', $this->professionIdForGatling('Menuisier'));

        $user4 = User::updateOrCreate(
            ['email' => 'artisan4@test.com'],
            [
                'name' => 'Artisan artisan4',
                'password' => 'password123',
                'type_user' => 'artisan',
                'email_verified_at' => now(),
            ]
        );
        $this->linkArtisanProfile($user4, 'Longueuil', $this->professionIdForGatling('Peintre'));

        $user5 = User::updateOrCreate(
            ['email' => 'artisan5@test.com'],
            [
                'name' => 'Artisan artisan5',
                'password' => 'password123',
                'type_user' => 'artisan',
                'email_verified_at' => now(),
            ]
        );
        $this->linkArtisanProfile($user5, 'Sherbrooke', $this->professionIdForGatling('Plombier'));

        $user6 = User::updateOrCreate(
            ['email' => 'artisan6@test.com'],
            [
                'name' => 'Artisan artisan6',
                'password' => 'password123',
                'type_user' => 'artisan',
                'email_verified_at' => now(),
            ]
        );
        $this->linkArtisanProfile($user6, 'Gatineau', $this->professionIdForGatling('Maçon'));

        $user7 = User::updateOrCreate(
            ['email' => 'artisan7@test.com'],
            [
                'name' => 'Artisan artisan7',
                'password' => 'password123',
                'type_user' => 'artisan',
                'email_verified_at' => now(),
            ]
        );
        $this->linkArtisanProfile($user7, 'Trois-Rivieres', $this->professionIdForGatling('Electricien'));

        $user8 = User::updateOrCreate(
            ['email' => 'artisan8@test.com'],
            [
                'name' => 'Artisan artisan8',
                'password' => 'password123',
                'type_user' => 'artisan',
                'email_verified_at' => now(),
            ]
        );
        $this->linkArtisanProfile($user8, 'Terrebonne', $this->professionIdForGatling('Menuisier'));

        $user9 = User::updateOrCreate(
            ['email' => 'artisan9@test.com'],
            [
                'name' => 'Artisan artisan9',
                'password' => 'password123',
                'type_user' => 'artisan',
                'email_verified_at' => now(),
            ]
        );
        $this->linkArtisanProfile($user9, 'Repentigny', $this->professionIdForGatling('Peintre'));
    }

    /**
     * professions.name = colonne profession de cities.csv;
     * professions.description = lien explicite vers les CSV Gatling (artisans.csv n’a pas de colonne description).
     */
    private function professionIdForGatling(string $name): int
    {
        return Profession::firstOrCreate(
            ['name' => $name],
            [
                'description' => 'Données perf Gatling : comptes dans resources/data/artisans.csv ; villes/métiers dans resources/data/cities.csv.',
                'photo' => null,
            ]
        )->id;
    }

    private function linkArtisanProfile(User $user, string $ville, int $professionId): void
    {
        $artisan = Artisan::firstOrNew(['user_id' => $user->id]);
        $artisan->nom = $user->name;
        $artisan->profession = $professionId;
        $artisan->ville = $ville;
        $artisan->adresse = null;
        $artisan->photo = null;
        $artisan->telephone = null;
        $artisan->facebook = null;
        $artisan->instagram = null;
        $artisan->whatsapp = null;
        $artisan->user_id = $user->id;
        $artisan->save();
    }

    /**
     * Same credentials as gatling/resources/data/clients.csv (raw data, no CSV read).
     */
    private function clientUsers(): void
    {
        User::updateOrCreate(
            ['email' => 'client1@test.com'],
            [
                'name' => 'Client client1',
                'password' => 'password123',
                'type_user' => 'client',
                'email_verified_at' => now(),
            ]
        );
        User::updateOrCreate(
            ['email' => 'client2@test.com'],
            [
                'name' => 'Client client2',
                'password' => 'password123',
                'type_user' => 'client',
                'email_verified_at' => now(),
            ]
        );
        User::updateOrCreate(
            ['email' => 'client3@test.com'],
            [
                'name' => 'Client client3',
                'password' => 'password123',
                'type_user' => 'client',
                'email_verified_at' => now(),
            ]
        );
        User::updateOrCreate(
            ['email' => 'client4@test.com'],
            [
                'name' => 'Client client4',
                'password' => 'password123',
                'type_user' => 'client',
                'email_verified_at' => now(),
            ]
        );
        User::updateOrCreate(
            ['email' => 'client5@test.com'],
            [
                'name' => 'Client client5',
                'password' => 'password123',
                'type_user' => 'client',
                'email_verified_at' => now(),
            ]
        );
    }

    /**
     * Two conversations per artisan (same artisan_id, two clients), IDs aligned with
     * gatling/resources/data/usernavigation.csv for perf03 (101–110) plus 111–118 for artisans 6–9.
     */
    private function seedPerf03ClientConversations(): void
    {
        $rows = [
            ['id' => 101, 'client' => 'client1@test.com', 'artisan_user' => 'artisan1@test.com'],
            ['id' => 102, 'client' => 'client2@test.com', 'artisan_user' => 'artisan1@test.com'],
            ['id' => 103, 'client' => 'client3@test.com', 'artisan_user' => 'artisan2@test.com'],
            ['id' => 104, 'client' => 'client4@test.com', 'artisan_user' => 'artisan2@test.com'],
            ['id' => 105, 'client' => 'client5@test.com', 'artisan_user' => 'artisan3@test.com'],
            ['id' => 106, 'client' => 'client1@test.com', 'artisan_user' => 'artisan3@test.com'],
            ['id' => 107, 'client' => 'client2@test.com', 'artisan_user' => 'artisan4@test.com'],
            ['id' => 108, 'client' => 'client3@test.com', 'artisan_user' => 'artisan4@test.com'],
            ['id' => 109, 'client' => 'client4@test.com', 'artisan_user' => 'artisan5@test.com'],
            ['id' => 110, 'client' => 'client5@test.com', 'artisan_user' => 'artisan5@test.com'],
            ['id' => 111, 'client' => 'client1@test.com', 'artisan_user' => 'artisan6@test.com'],
            ['id' => 112, 'client' => 'client2@test.com', 'artisan_user' => 'artisan6@test.com'],
            ['id' => 113, 'client' => 'client3@test.com', 'artisan_user' => 'artisan7@test.com'],
            ['id' => 114, 'client' => 'client4@test.com', 'artisan_user' => 'artisan7@test.com'],
            ['id' => 115, 'client' => 'client5@test.com', 'artisan_user' => 'artisan8@test.com'],
            ['id' => 116, 'client' => 'client1@test.com', 'artisan_user' => 'artisan8@test.com'],
            ['id' => 117, 'client' => 'client2@test.com', 'artisan_user' => 'artisan9@test.com'],
            ['id' => 118, 'client' => 'client3@test.com', 'artisan_user' => 'artisan9@test.com'],
        ];

        $now = now();
        foreach ($rows as $row) {
            $client = User::where('email', $row['client'])->first();
            $artisanId = $this->artisanIdForUserEmail($row['artisan_user']);
            if ($client === null || $artisanId === null) {
                continue;
            }

            DB::table('conversations')->updateOrInsert(
                ['id' => $row['id']],
                [
                    'user_id' => $client->id,
                    'artisan_id' => $artisanId,
                    'created_at' => $now,
                    'updated_at' => $now,
                ]
            );
        }
    }

    /**
     * One devis per conversation (FK artisan_id = users.id of the artisan).
     */
    private function seedDevisForConversations(): void
    {
        foreach (Conversation::query()->orderBy('id')->cursor() as $conversation) {
            $artisanUserId = Artisan::query()
                ->whereKey($conversation->artisan_id)
                ->value('user_id');
            if ($artisanUserId === null) {
                continue;
            }

            Devis::firstOrCreate(
                ['conversation_id' => $conversation->id],
                [
                    'artisan_id' => $artisanUserId,
                    'client_id' => $conversation->user_id,
                    'montant' => round(100 + ($conversation->id % 50), 2),
                    'description' => sprintf('Devis seed — conversation #%d', $conversation->id),
                    'statut' => 'en_attente',
                ]
            );
        }
    }

    private function artisanIdForUserEmail(string $email): ?int
    {
        $user = User::where('email', $email)->first();
        if ($user === null) {
            return null;
        }
        $artisan = Artisan::where('user_id', $user->id)->first();

        return $artisan?->id;
    }

    public function run(): void
    {
        $this->AdminUsers();
        $this->artisanUsers();
        $this->clientUsers();
        $this->seedPerf03ClientConversations();
        $this->seedDevisForConversations();
    }
}