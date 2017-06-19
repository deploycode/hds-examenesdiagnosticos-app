<?php

namespace examenesApp;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = "images";
    protected $fillable = ['route', 'alt' ,'post_id'];

    public function setRouteAttribute($route){
      if (!empty($route)) {
        $new_name=$route->getClientOriginalName();
        $this->attributes['route']= $new_name;
        \Storage::disk('local')->put($new_name,\File::get($route));
      }
    }
    public function post(){
      return $this->belongsTo('examenesApp\Post');
    }
}
