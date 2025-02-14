<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Like extends BaseModel
{
    protected $guarded = [];

    public function likeable()
    {
        return $this->morphTo();
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
