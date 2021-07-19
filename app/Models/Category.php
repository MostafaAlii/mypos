<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Category extends Model
{
    protected $guarded = [];
    public function products(){
        return $this->hasMany('App\Models\Product');
    }
    public function stocks(){
        return $this->hasMany('App\Models\Stock');
    }
}
