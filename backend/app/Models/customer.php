<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    use HasFactory, Notifiable;
    protected $guarded = ['id'];

    protected $hidden=  [
        'password',
        'created_at',
        'updated_at'
    ];
}
