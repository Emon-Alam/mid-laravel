<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $table = 'media';
    protected $primaryKey = 'id';
    
    public $timestamps = false;
}
