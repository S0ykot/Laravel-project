<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Verification extends Model
{
    protected $table = "verification";
    public $timestamps = false;
    protected $primaryKey = 'ver_id';
}
