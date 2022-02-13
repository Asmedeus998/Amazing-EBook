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
        'order_data',
        'ebook_id',
        'account_id',
    ];
}
