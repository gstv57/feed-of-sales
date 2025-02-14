<?php

declare(strict_types = 1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class PessoaJuridica extends BaseModel
{
    /** @use HasFactory<\Database\Factories\PessoaJuridicaFactory> */
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'pessoa_id',
        'cnpj',
        'razao_social',
    ];

    public function pessoa(): BelongsTo
    {
        return $this->belongsTo(Pessoa::class);
    }
}
