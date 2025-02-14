<?php

declare(strict_types = 1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Servico extends BaseModel
{
    /** @use HasFactory<\Database\Factories\ServicoFactory> */
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['pessoa_id', 'nome', 'descricao', 'preco', 'ativo'];
}
