<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as LaravelModel;

class Model extends LaravelModel
{
    public $timestamps = true;

    const CREATED_AT = 'created';

    const UPDATED_AT = 'updated';
}
