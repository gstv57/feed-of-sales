<?php

declare(strict_types = 1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class PessoaFisica extends BaseModel
{
    /** @use HasFactory<\Database\Factories\PessoaFisicaFactory> */
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['pessoa_id', 'cpf', 'data_nascimento', 'nome', 'sobrenome'];

    public function pessoa(): BelongsTo
    {
        return $this->belongsTo(Pessoa::class);
    }
}
