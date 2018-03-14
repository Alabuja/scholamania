<?php

namespace App\Individuals;

use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    protected $table = 'individualResources';

    protected $fillable = ['name', 'resource_url'];
}
