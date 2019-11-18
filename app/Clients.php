<?php

namespace App;
use Laravel\Passport\HasApiTokens;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Clients extends Authenticatable
{
    use Notifiable;


    public function case(){
      return $this->HasMany('App\Clients');
    }

    protected $fillable=['name','email','contact','pin',];

    protected $hidden=['password','remember_token',];


}
