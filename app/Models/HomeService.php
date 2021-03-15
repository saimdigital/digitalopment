<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeService extends Model
{
    use HasFactory;
    protected $table = 'home_service';
    protected $guarded = ['id','created_at','updated_at'];

}
