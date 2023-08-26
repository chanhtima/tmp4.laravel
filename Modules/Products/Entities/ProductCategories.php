<?php

namespace Modules\Products\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductCategories extends Model
{
    use HasFactory;
    // use NodeTrait;

    protected $fillable = ['id', 'name_th', 'name_en', 'description_th', 'description_en', 'image','icon','default_property', 'status','sequence', '_lft', '_rgt', 'parent_id', 'created_at', 'updated_at'];
    protected $table = "product_categories";
    protected $primaryKey = "id";

    protected $casts = [
        'created_at' => 'datetime:Y-m-d h:i:s',
        'updated_at' => 'datetime:Y-m-d h:i:s',
    ];


    protected static function newFactory()
    {
        return \Modules\Product\Database\factories\ProductCategoriesFactory::new();
    }

    // public function products()
    // {
    //     return $this->hasMany('Modules\Product\Entities\Products', 'category_id', 'id')->with(['items', 'brand', 'model']);
    // }
}
