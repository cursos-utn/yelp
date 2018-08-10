<?php

namespace App;
<<<<<<< HEAD
Use Illuminate\Database\Eloquent\Model;
=======

use Illuminate\Database\Eloquent\Model;
>>>>>>> 56c177756ad34c0b59cd723f29a655e7e7f842f7

class Tipo extends Model
{
    protected $table="tipo";

    public function lugares()
    {
        return $this->hasMany('App\Lugar');
    }
<<<<<<< HEAD


}

?>
=======
}
>>>>>>> 56c177756ad34c0b59cd723f29a655e7e7f842f7
