<?php

namespace App;

Use Illuminate\Database\Eloquent\Model;

class Lugar extends Model
{
    protected $table="lugar";

    public function tipo()
    {
        return $this->belongsTo('App\Tipo');
    }

    public function reviews() {
    	return $this->hasMany('App\Review');
    }

  public function creador()
    {
        return $this->belongsTo('App\User', 'creador_id');
    }
}
?>
