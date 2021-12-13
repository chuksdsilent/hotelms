<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuid;
use Illuminate\Database\Eloquent\SoftDeletes;

class ReservationBilling extends Model
{
    
    use HasFactory, Uuid, SoftDeletes;

    
    public $incrementing = false;

    protected $keyType = 'uuid';

    protected $guarded = [];

    protected $table = "reservation_billing";
}
