<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ebook extends Model
{
    use HasFactory;

    protected $guarded = [];

    public $timestamps = false;

    public function order(){
        return $this->hasMany(Order::class, 'ebook_id', 'id');
    }
}

