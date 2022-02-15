<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

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

    protected $hidden = [
        'password',
    ];

    // belong to one role
    public function roles()
    {
        return $this->belongsTo(Role::class, 'role_id', 'id');
    }

    // belong to one gender
    public function genders()
    {
        return $this->belongsTo(Gender::class, 'gender_id', 'gender_id');
    }

    // has to many order
    public function orders()
    {
        return $this->belongsTo(Order::class, 'id', 'users_id');

    }



}
