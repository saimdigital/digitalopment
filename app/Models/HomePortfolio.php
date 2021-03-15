<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomePortfolio extends Model
{
    use HasFactory;
    protected $table = 'home_portfolio';
    protected $guarded = ['id','created_at','updated_at'];
}
