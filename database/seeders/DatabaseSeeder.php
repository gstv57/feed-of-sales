<?php

declare(strict_types = 1);

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'is_admin' => true,
            'email'    => 'admin@soroplace.com',
        ]);

        $this->call([
            PessoaFisicaSeeder::class,
            PessoaJuridicaSeeder::class,
            ProdutoSeeder::class,
            ServicoSeeder::class,
        ]);
    }
}
