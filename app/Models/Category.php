<?php

namespace App\Models;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;
 // https://github.com/derickfelix/includeDelivery/blob/master/database/migrations/2017_01_11_184012_create_categories_table.php
class Category extends Base implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
        'name'
    ];

    public function products(){

        return $this->hasMany(Product::class);
    }
}