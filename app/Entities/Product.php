<?php


namespace App\Entities;

use App\Entities\Category;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'description', 'price', 'image'
    ];

    protected $hidden = [ 'category_id' ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function getImageAttribute($value){
        return env('APP_URL') . "/assets/" . $value;
    }

}
