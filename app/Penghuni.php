<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penghuni extends Model
{
    protected $table = 'penghuni';
    protected $primaryKey = 'Penghuni_ID';
    protected $keyType = 'string';
    public $timestamps = false;
}
