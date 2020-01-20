<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Usuario extends Model
{
  protected $table = ('usuario');
  //private $primarykey = ('id');
  //private $timesstamps = false;
  protected $guarded=[];

  /* public function () {
    return $this->belongsTo('posteo','posteo_id');
  } */

}
