<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'slug', 'category', 'botanical_name',
        'description', 'origin', 'image', 'order',
    ];

    public function forms()
    {
        return $this->hasMany(ProductForm::class)->orderBy('order');
    }

    public static function categoryLabel(string $category): string
    {
        return [
            'coffee_cocoa' => 'Coffee & cocoa',
            'spices' => 'Spices',
            'botanicals' => 'Botanicals',
        ][$category] ?? $category;
    }
}
