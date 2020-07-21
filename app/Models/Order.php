<?php

namespace CodeDelivery\Models;

use App\Models\Base;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;
 // coupon de reduction
 // https://github.com/derickfelix/includeDelivery/blob/master/database/migrations/2017_03_13_003525_create_cupoms_table.php
class Order extends Base implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
        'client_id',
        'user_deliveryman_id',
        'total',
        'status',
    ];

    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }
    public function client(){
        return $this->belongsTo(Client::class);
    }

    public function deliveryman()
    {
        return $this->belongsTo(User::class, 'user_deliveryman_id', 'id');
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }

}