<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class room extends Model
{
    use HasFactory;
    protected $table = 'room';
    function roomtype()
    {
        return $this->belongsTo(roomtype::class, 'roomtype_id');
    }
}
