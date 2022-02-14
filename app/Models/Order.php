<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $guarded = [];

    public $timestamps = false;

    public function ebook()
	{
	      return $this->belongsTo(Ebook::class, 'ebook_id', 'id');
	}

    public function user()
	{
	      return $this->belongsTo(User::class, 'user_id', 'id');
	}
}
