<?php

declare(strict_types = 1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Servico extends BaseModel
{
    /** @use HasFactory<\Database\Factories\ServicoFactory> */
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['pessoa_id', 'nome', 'descricao', 'preco', 'ativo'];

    public function pessoa(): BelongsTo
    {
        return $this->belongsTo(Pessoa::class);
    }

    public function likes(): MorphMany
    {
        return $this->morphMany(Like::class, 'likeable');
    }

    public function comentarios(): MorphMany
    {
        return $this->morphMany(Comentario::class, 'commentable');
    }

    public function feedItem(): MorphOne
    {
        return $this->morphOne(FeedItem::class, 'feedable');
    }

    public function publicar()
    {
        return $this->feedItem()->create();
    }
}
