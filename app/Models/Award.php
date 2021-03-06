<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Award extends Model
{
  protected $fillable = ['local_id', 'release_id'];
    //

  public function items(){
    return $this->morphMany('App\Models\Item', 'myitem');
  }

  public function documents(){
    return $this->morphMany('App\Models\Document', 'docs');
  }

  public function suppliers(){
    return $this->hasMany('App\Models\Supplier');
  }

  public function providers(){
    return $this->belongsToMany('App\Models\Provider', 'provider_award');
  }


  public function release(){
    return $this->belongsTo('App\Models\Release');
  }
}
