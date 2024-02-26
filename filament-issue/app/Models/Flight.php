<?php

namespace App\Models;

use App\Models\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    use Uuid;

    public function getRouteKeyName(): string
    {
        return 'uuid';
    }
}
