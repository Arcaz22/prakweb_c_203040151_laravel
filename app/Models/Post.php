<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // Yang Boleh Diisi(fillable)
    // protected $fillable = [
    //     'title',
    //     'excerpt',
    //     'body'
    // ];

    // Yang nggak boleh diisi(gak boleh diisi)
    protected $guarded = ['id'];
}
