<?php
namespace App\Models;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
class Product extends Model
{
    use Translatable;
    protected $with = ['translations'];
    protected $translatedAttributes = ['name', 'description'];
    protected $guarded = [];
    protected $append = ['image_path', 'profit_precent'];
    protected $hidden = ['translations'];
    protected $casts = [
        'status' => 'boolean',
    ];

    public function category() {
        return $this->belongsTo('App\Models\Category');
    }
    public  function getStatus(){
        echo ($this->status == 0) ?  '<button class="btn btn-outline-danger">'.trans('general.not_active').'</button>' : '<button class="btn btn-outline-success">'.trans('general.active').'</button>';
    }
    public function getImagePathAttribute(){
        return asset('uploads/products_images/' . $this->image);
    }
    public function getProfitPrecentAttribute(){
        $profit = $this->sale_price - $this->purchase_price;
        $profit_precent = $profit * 100 / $this->purchase_price;
        return number_format($profit_precent, 2) . ' %';
    }

}
