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
            ['email' => '#'],
            ['name' => '#', 'email' => '#', 'password' => '123456A#'],
        );
    }
}
