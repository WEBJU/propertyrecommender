<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $fillable=[
      'property_name','user_id','property_type',
      'location','price','description','property_image',
    ];

    public function user(){
      return $this->belongsTo('App\User','user_id');
    }
}
