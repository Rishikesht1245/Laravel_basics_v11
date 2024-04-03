<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;

    // mentioning the data to be saved in the DB when we invoke the create function
    protected $fillable = [
        "note", "user_id"
    ];
}
