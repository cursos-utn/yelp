<?php

namespace App;



class Tipo extends Model
{
    protected $table="tipo";

    public function lugares()
    {
        return $this->hasMany('App\Lugar');
    }


}

?>

