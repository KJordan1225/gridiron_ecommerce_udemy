<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Product extends Model
{
    //
    protected $fillable = [
        'name',
        'slug',
        'description',
        'qty',
        'price',
        'old_price',
        'discount',
        'thumbnail',
        'first_image',
        'second_image',
        'third_image',
        'category__id',
        'subcategory_id',
        'childcategory_id',
        'brand_id',
        'status',
    ];

    /**
     * Set slug automatically
     */
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }

    public function category() : BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function subcategory() : BelongsTo
    {
        return $this->belongsTo(Subcategory::class);
    }

    public function childcategory() : BelongsTo
    {
        return $this->belongsTo(Childcategory::class);
    }

    public function brand() : BelongsTo
    {
        return $this->belongsTo(Brand::class);
    }

    public function colors() : BelongsToMany
    {
        return $this->belongsToMany(Color::class);
    }

    public function sizes() : BelongsToMany
    {
        return $this->belongsToMany(Size::class);
    }

    public function orders() : BelongsToMany
    {
        return $this->belongsToMany(Order::class);
    }

    public function reviews() : HasMany
    {
        return $this->hasMany(Review::class);
    }
    
    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    
}
