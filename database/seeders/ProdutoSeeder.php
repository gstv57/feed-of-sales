<?php

declare(strict_types = 1);

namespace Database\Seeders;

use App\Models\Pessoa;
use App\Models\Produto;
use Illuminate\Database\Seeder;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pessoa::all()->each(
            fn ($pessoa) => $pessoa->produtos()->saveMany(
                Produto::factory()->count(2)->make()
            )
        );
    }
}
