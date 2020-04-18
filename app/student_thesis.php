<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student_thesis extends Model
{
    protected $table = "student_thesis";
    public $timestamps = false;
    protected $primaryKey = 'thesis_id';
}
