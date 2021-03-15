<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceInfo extends Model
{
    protected $table = 'serviceinfo';
    protected $guarded = ['id', 'created_at', 'updated_at'];
    use HasFactory;
}