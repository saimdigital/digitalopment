<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PortInfo extends Model
{
    protected $table = 'portinfo';
    protected $guarded = ['id', 'created_at', 'updated_at'];
    use HasFactory;
}