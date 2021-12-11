<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuid;

class Staff extends Model
{
        
    use HasFactory, Uuid;

    
    public $incrementing = false;

    protected $keyType = 'uuid';

    protected $guarded = [];

    protected $table = "staffs";
}
