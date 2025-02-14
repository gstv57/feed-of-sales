<?php

declare(strict_types = 1);

namespace Database\Seeders;

use App\Models\Pessoa;
use App\Models\Servico;
use Illuminate\Database\Seeder;

class ServicoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pessoa::all()->each(
            fn ($pessoa) => $pessoa->servicos()->saveMany(
                Servico::factory()->count(2)->make()
            )
        );
    }
}
