<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeSlider extends Model
{
    protected $table = 'home_slider';
    protected $guarded = ['id', 'created_at', 'updated_at'];
    use HasFactory;
}
