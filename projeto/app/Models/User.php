<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use LdapRecord\Laravel\Auth\LdapAuthenticatable;
use LdapRecord\Laravel\Auth\AuthenticatesWithLdap;

class User extends Authenticatable implements LdapAuthenticatable
{
    use HasFactory, Notifiable, AuthenticatesWithLdap;

    protected $appends = ['exploded_dn'];
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'dn',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ]; 

    public function getExplodedDnAttribute()
    {   
        /**
         * pego o CN do usuário e tiro o nome para ficar só a OU que ele participa
         * CN=Daniel Lopes Amorim,OU=Supervisão Informatica,OU=Defensoria,DC=dpema,DC=br ->> dado que será tratado
         * OU=Supervisão Informatica,OU=Defensoria,DC=dpema,DC=br ->> dado retornado
         * @var string;
         */
        $explode_dn = explode(',', $this->dn);
        array_shift($explode_dn);
        return implode(',', $explode_dn);
    }

    

}
