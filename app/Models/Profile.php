<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'email', 'address', 'state', 'city', 'pin_code', 'calling_number', 'whatsapp_number'
    ];
}
