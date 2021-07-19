<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Stock extends Model
{
    protected $table = 'products';
    protected $fillable = ['user_email', 'referances', 'created_at', 'updated_at'];
    public function category() {
        return $this->belongsTo('App\Models\Category');
    }
}
