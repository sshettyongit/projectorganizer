<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class project extends Model
{
    protected $guarded = ['$pid'] ;
    protected $primaryKey = 'pid' ;

    public function users(){
        return $this->belongsToMany(User::class)->withPivot('upid')->withTimestamps();
    }
}