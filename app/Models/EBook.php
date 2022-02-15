<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EBook extends Model
{
    use HasFactory;

    public $timeStamps = false;
    const UPDATED_AT = null;
    const CREATED_AT = null;


    protected $fillable = [
        'title',
        'author',
        'description',


    ];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
