<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Join_us extends Model
{
  protected $primarykey='id';
  protected $table='join_us';
  protected $fillable=[
    'email','zip','created_at','updated_at'
  ];
  
}
