<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class others extends Model
{
    protected $table = "others";

    protected $fillable = [
        "name_product",
        "image",
        "description"
    ];
}
