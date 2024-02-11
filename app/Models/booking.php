<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class booking extends Model
{
    use HasFactory;
    protected $table = 'booking';
    function customer()
    {
        return $this->belongsTo(customer::class);
    }
    function room()
    {
        return $this->belongsTo(room::class);
    }
}
