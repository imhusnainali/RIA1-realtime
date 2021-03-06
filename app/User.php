<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use App\Message;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * messages
     * Relation with the message table
     */
    public function messages () {
        return $this->hasMany(Message::class);
    }
}
