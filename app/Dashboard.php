<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dashboard extends Model
{
    protected $table = "dashboard";
    protected $primaryKey = 'id';
    public $timestamps = false;
}
