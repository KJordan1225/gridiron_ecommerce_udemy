<?php

namespace App\Models;

use App\Models\Product;
use App\Models\Subcategory;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Childcategory extends Model
{
    //
    protected $fillable = [
        'name',
        'slug',
        'subcategory_id',
    ];

    /**
     * Set slug automatically
     */
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }

    public function subcategory() : BelongsTo
    {
        return $this->belongsTo(Subcategory::class);
    }

    public function products() : HasMany
    {
        return $this->hasMany(Product::class);
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }
}
