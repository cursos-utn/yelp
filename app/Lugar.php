<?php

namespace App;

Use Illuminate\Database\Eloquent\Model;

class Lugar extends Model
{
    protected $table="lugar";

    protected $fillable=[
        "tipo_id", "foto","direccion","barrio","horarios","telefonos","updated_at","nombre"
    ];

    public function tipo()
    {
        return $this->belongsTo('App\Tipo');
    }

  public function creador()
    {
        return $this->belongsTo('App\User', 'creador_id');
    }
}
?>
