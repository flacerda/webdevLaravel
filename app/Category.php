<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'Categories';

    protected $fillable = ['title'];

    public function setUrlAttribute($value)
    {
    	if($value == '')
    		$value = $this->attributes['title'];
    	$this->attributes['url'] =  str_slug($value);
    }

     public function products()
    {
        return $this->belongsToMany('App\Product');
    }
}
