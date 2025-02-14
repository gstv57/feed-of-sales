<?php

declare(strict_types = 1);

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Servico>
 */
class ServicoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'pessoa_id' => '',
            'nome'      => $this->faker->name,
            'descricao' => $this->faker->text,
            'preco'     => $this->faker->randomFloat(2, 0, 999999),
            'ativo'     => $this->faker->boolean,
        ];
    }
}
