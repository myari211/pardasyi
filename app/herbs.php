<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Herbs extends Model
{
    protected $table = "herbs";

    protected $fillable = [
        "name_product",
        "description",
        "image",
    ];
}
