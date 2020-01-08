<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Klant extends Model
{
    protected $table = 'Klanten';

    public $timestamps = false;

    protected $guarded = [];

}
