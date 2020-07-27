<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class project_users extends Model
{
    protected $gaurded = ['upid'];
    
    protected $primaryKey = 'upid';}
