<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rice extends Model
{
    protected $table = "rice";

    protected $fillable = [
        "name_product",
        "image",
        "description"
    ];
}
