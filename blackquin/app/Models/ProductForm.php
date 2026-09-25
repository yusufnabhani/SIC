<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductForm extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id', 'name', 'origin', 'processing', 'screen',
        'grade', 'moisture', 'defect_standard', 'packaging', 'order',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
