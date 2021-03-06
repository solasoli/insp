<?php

namespace App\Repository\AngkaKredit;

use App\Repository\BaseModel;
use Illuminate\Database\Eloquent\Model;

class Unsur extends Model
{
  protected $table = "akr_unsur";
  public $timestamps = false;

  public function subUnsur()
  {
    return $this->belongsTo('App\Repository\AngkaKredit\SubUnsur', 'id');
  }
}
