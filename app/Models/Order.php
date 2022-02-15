<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public $timeStamps = false;
    const UPDATED_AT = null;
    const CREATED_AT = null;

    protected $fillable = [
        'order_date',
        'ebook_id',
        'users_id',
    ];

    public function ebook()
    {
        return $this->belongsTo(EBook::class, 'ebook_id', 'ebook_id');
    }

    public function user()
    {
        // return $this->belongsTo(User::class, 'id', 'users_id');
        return $this->hasMany(User::class, 'id', 'users_id');
    }
}
