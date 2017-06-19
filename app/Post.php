<?php

namespace examenesApp;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Carbon\Carbon;
use DB;
class Post extends Model
{
  use Sluggable;
  public function sluggable()
  {
      return [
          'slug' => [
              'source' => 'title'
          ]
      ];
  }
    protected $table="posts";
    protected $fillable=['title','slug','content','menu_id'];

    public function images(){
      return $this->hasMany('examenesApp\Image');
    }
    public function menu(){
      return $this->belongsTo('examenesApp\Menu');
    }
}
