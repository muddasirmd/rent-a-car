<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    /**
     * The attributes that are not mass assignable.
     *
     * @var list<string>
     */
    protected $guarded = ["id"];

    public function cars(){
        return $this->hasMany(Car::class);
    }
}
