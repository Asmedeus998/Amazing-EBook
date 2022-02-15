<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    use HasFactory;
    public $timeStamps = false;
    const UPDATED_AT = null;
    const CREATED_AT = null;

    protected $fillable = [
        'gender_desc'
    ];

    // one to many
    public function users()
    {
        return $this->hasMany(User::class);
    }
}
