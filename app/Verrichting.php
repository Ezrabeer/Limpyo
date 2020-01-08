<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Verrichting extends Model
{
    protected $table = 'Verrichtingen';

    protected $guarded = [];

    public $timestamps = false;

    public function klanten() {
        return $this->hasMany('\App\Klant', 'ID', 'Klant');
    }
}
