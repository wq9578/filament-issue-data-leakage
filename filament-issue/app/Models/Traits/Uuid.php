<?php

namespace App\Models\Traits;

use Illuminate\Support\Str;

trait Uuid
{
    // https://medium.com/@laravelprotips/uuid-in-laravel-a-simple-guide-55cdc4642d43#5539
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->uuid = (string)Str::uuid();
        });
    }
}
