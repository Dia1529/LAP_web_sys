<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Boba extends Model
{
    use HasFactory;
    protected $table = 'boba';

    protected $fillable =[
        "name",
        "description",
        "price"
    ] ;

   
}
