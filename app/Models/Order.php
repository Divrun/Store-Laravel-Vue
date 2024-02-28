<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'address'
    ];

    public function products(): belongsToMany
    {
        return $this->belongsToMany(Product::class, 'order_products')->withPivot('count');
    }
}
