<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
  protected $guarded = [];

  public function profileImage(){
    return ($this->image) ? '/storage/' . $this->image : '/img/profile.png';
  }

  public function user(){
    return $this->belongsTo(User::class);
  }

  public function followers(){
    return $this->belongsToMany(User::class);
  }

}
