<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manager extends Model
{
    protected $table = "manager";
    protected $primaryKey = 'id';
    public $timestamps = false;
}
