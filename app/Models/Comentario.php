<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comentario extends BaseModel
{
    protected $guarded = [];

    public function commentable()
    {
        return $this->morphTo();
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
