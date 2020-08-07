<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tasks extends Model
{
    protected $guarded = ['tid'];

    //protected $fillable = ['Tname' , 'Tdescription' , 'project_pid'];
    
    protected $primaryKey = 'tid';

    public function project(){
        return $this->belongsTo(project::class);
    }
}
