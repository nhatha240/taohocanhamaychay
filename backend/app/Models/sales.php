<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class sales extends Model
{
    use HasFactory, Notifiable;
    protected $guarded = ['id'];

    protected $hidden=  [
        'created_at',
        'updated_at'
    ];
}

