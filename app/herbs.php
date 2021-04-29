<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class herbs extends Model
{
    protected $table = "herbs";

    protected $fillable = [
        "name_product",
        "description",
        "image",
    ];
}
