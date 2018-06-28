<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    protected $table ='posts';

    public $primary_key ='id';

    public $timestamps = true;
    
    public function user(){
        return $this->belongsTo('App\User');
    }
}
