<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    Protected $fillable=['name', 'phone', 'email', 'dateorder', 'checkinTime', 'price'];
}
