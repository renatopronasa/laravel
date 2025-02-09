<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Se não encontrar o registro com o e-mail, cadastra o registro no BD
        User::firstOrCreate(
            ['email' => 'cesar@celke.com.br'],
            ['name' => 'Cesar', 'email' => 'cesar@celke.com.br', 'password' => '123456A#'],
        );

        // Se não encontrar o registro com o e-mail, cadastra o registro no BD
        User::firstOrCreate(
            ['email' => 'kelly@celke.com.br'],
            ['name' => 'Kelly', 'email' => 'kelly@celke.com.br', 'password' => '123456A#'],
        );
        
        // Se não encontrar o registro com o e-mail, cadastra o registro no BD
        User::firstOrCreate(
            ['email' => 'jessica@celke.com.br'],
            ['name' => 'Jessica', 'email' => 'jessica@celke.com.br', 'password' => '123456A#'],
        );

        // Se não encontrar o registro com o e-mail, cadastra o registro no BD
        User::firstOrCreate(
            ['email' => 'gabrielly@celke.com.br'],
            ['name' => 'Gabrielly', 'email' => 'gabrielly@celke.com.br', 'password' => '123456A#'],
        );
    }
}
