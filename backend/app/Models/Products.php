<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Products extends Model
{
    use HasFactory;
    use SoftDeletes;
    public function comments()
    {
        return $this->hasMany(comment::class);
    }

    public function Colors()
    {
        return $this->hasMany(Colors::class);
    }

    public function Size()
    {
        return $this->hasMany(Size::class);
    }

    public function images()
    {
        return $this->hasMany(images::class);
    }

    public function orders()
    {
        return $this->hasMany(orders::class);
    }
}
