<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    public $timeStamps = false;
    const UPDATED_AT = null;
    const CREATED_AT = null;

    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'email',
        'password',
        'display_picture_link',
        'delete_flag',
        'modified_at_date',
        'modified_by',
        'role_id',
        'gender_id'

    ];
}
