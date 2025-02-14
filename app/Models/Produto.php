<?php

declare(strict_types = 1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Produto extends BaseModel
{
    /** @use HasFactory<\Database\Factories\ProdutoFactory> */
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'pessoa_id',
        'nome',
        'descricao',
        'preco',
        'estoque',
        'ativo',
    ];

    public function pessoa(): BelongsTo
    {
        return $this->belongsTo(Pessoa::class);
    }
}
