<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class meats extends Model
{
    protected $table = "meats";

    protected $fillable = [
        "name_product",
        "description",
        "image",
    ];
}
