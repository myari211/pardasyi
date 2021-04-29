<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fruits extends Model
{
    protected $table = "fruits";

    protected $fillable = [
        "name_product",
        "description",
        "image"
    ];
}
