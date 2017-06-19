<?php

namespace examenesApp;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table="menus";
    protected $fillable = ['menu','icon'];

    public function posts(){
      return $this->hasMany('examenesApp\Post');
    }
}
