<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fish extends Model
{
    protected $table = "fish";

    protected $fillable = [
        "name_product",
        "image",
        "description"
    ];
}
