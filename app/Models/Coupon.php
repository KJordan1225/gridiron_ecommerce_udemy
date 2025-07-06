<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    //
    protected $fillable = [
        'name',
        'discount',
        'expires_at',
    ];

    /**
    * Convert the coupon name to uppercase
    */
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = Str::upper($value);
    }

    /**
     * Check if coupon is valid.
     */
    public function checkIfExpired()
    {
        if($this->expires_at > date("Y-m-d")) {
            return false;
        }else{
            return true;
        }
    }
}
