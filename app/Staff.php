<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $table = '_staff';
    protected $fillable = ['name', 'surname', 'company', 'email', 'phone'];
}
