<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    /**
     * The attributes that are not mass assignable.
     *
     * @var list<string>
     */
    protected $guarded = ["id"];

    public function brand(){
        return $this->belongsTo(Brand::class);
    }
}
