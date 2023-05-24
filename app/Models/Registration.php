<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    use HasFactory;
    protected $fillable=[
    'fname','lname','address1','address2','state','zip','city','email','phone','category','contectway'

    ];
}
