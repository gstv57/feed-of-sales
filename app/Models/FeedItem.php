<?php

namespace App\Models;


class FeedItem extends BaseModel
{
    protected $guarded = [];

    public function feedable()
    {
        return $this->morphTo();
    }
}
