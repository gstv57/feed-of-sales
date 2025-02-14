<?php

declare(strict_types = 1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pessoa extends BaseModel
{
    /** @use HasFactory<\Database\Factories\PessoaFactory> */
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['user_id', 'type'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function pessoaFisica(): HasOne
    {
        return $this->hasOne(PessoaFisica::class);
    }

    public function pessoaJuridica(): HasOne
    {
        return $this->hasOne(PessoaJuridica::class);
    }

    public function produtos(): HasMany
    {
        return $this->hasMany(Produto::class);
    }

    public function servicos(): HasMany
    {
        return $this->hasMany(Servico::class);
    }
}
