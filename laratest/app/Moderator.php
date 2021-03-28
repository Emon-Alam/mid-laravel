<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Moderator extends Model
{
    protected $table = 'moderators';
    protected $primaryKey = 'id';
    
    public $timestamps = false;
}
