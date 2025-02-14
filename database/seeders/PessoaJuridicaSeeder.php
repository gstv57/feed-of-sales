<?php

declare(strict_types = 1);

namespace Database\Seeders;

use App\Models\Pessoa;
use App\Models\PessoaJuridica;
use App\Models\User;
use Illuminate\Database\Seeder;

class PessoaJuridicaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()
            ->count(5)
            ->has(
                Pessoa::factory()
                    ->state(['type' => 'PJ'])
                    ->has(PessoaJuridica::factory())
            )
            ->create();
    }
}
