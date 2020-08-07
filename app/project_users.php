<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class project_users extends Model
{
    protected $guarded = ['upid'];
    
    protected $primaryKey = 'upid';
}
