<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    use HasFactory;

    protected $guarded = [];

    public $timestamps = false;

    public function user(){
        return $this->hasMany(User::class, 'gender_id', 'id');
    }
}
