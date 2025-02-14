<?php

declare(strict_types = 1);

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PessoaFisica>
 */
class PessoaFisicaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'pessoa_id'       => '',
            'nome'            => $this->faker->firstName,
            'sobrenome'       => $this->faker->lastName,
            'cpf'             => $this->faker->cpf(),
            'data_nascimento' => $this->faker->date,
        ];
    }
}
