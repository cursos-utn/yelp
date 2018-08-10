<?php

namespace App;
<<<<<<< HEAD
Use Illuminate\Database\Eloquent\Model;
=======

use Illuminate\Database\Eloquent\Model;
>>>>>>> 56c177756ad34c0b59cd723f29a655e7e7f842f7

class Lugar extends Model
{
    protected $table="lugar";

    public function tipo()
    {
        return $this->belongsTo('App\Tipo');
    }
<<<<<<< HEAD
}

?>
=======

    public function creador()
    {
        return $this->belongsTo('App\User', 'creador_id');
    }
}
>>>>>>> 56c177756ad34c0b59cd723f29a655e7e7f842f7
