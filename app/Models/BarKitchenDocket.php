<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuid;

class BarKitchenDocket extends Model
{
    use HasFactory, Uuid;


    public $incrementing = false;

    protected $keyType = 'uuid';

    protected $guarded = [];

    protected $table = "bar_kitchen_docket";
}
