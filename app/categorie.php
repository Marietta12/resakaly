<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categorie extends Model
{
    protected $table = "categories";
    protected $primaryKey = "id";

    protected $fillable = [
        'title', 'description', 'photo',
    ];
}
