<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Factuur extends Model
{
    protected $table = 'Facturen';

    public $timestamps = false;

    protected $guarded = [];
}
