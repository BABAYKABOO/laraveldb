<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'product_id',
        'product_name',
        'price'
    ];

    public function scopeHasProduct($query, array $id)
    {
        for ($i = 0; $i < count($id); $i++)
        {
            if (empty($query->where('product_id', $id[$i])))
            {
                return $query->where('product_id', $id[$i]);
            }
        }
        return null;
    }
}
