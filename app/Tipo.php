<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Tipo extends Model
{
    protected $table="tipo";
    protected $fillable = ["nombre"];

    public function lugares()
    {
        return $this->hasMany('App\Lugar');
    }


}

?>

