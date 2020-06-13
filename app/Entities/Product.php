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

}
