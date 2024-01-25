<?php

namespace App;

use App\Product;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function brand()
    {
        return $this->belongsTo('App\Brand');
    }

    public function subcategory()
    {
        return $this->belongsTo('App\Subcategory');
    }

    public function images()
    {
      return $this->hasMany('App\Productimage');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag')->withTimestamps();
    }

    public function colors()
    {
        return $this->belongsToMany('App\Color')->withTimestamps();
    }

    public function sizes()
    {
        return $this->belongsToMany('App\Size')->withTimestamps();
    }

    // public function category_product($category_name)
    // {
    //     $products = Product::where('subcategory_id', $category_name)->all();
    // }
}
