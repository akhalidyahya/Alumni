<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    protected $fillable = ['nama','email','alumni_id','password','role'];
}
