<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $table="review";

    public function lugares()
    {
        return $this->belongsTo('App\Lugar');
    }
    public function usuario()
    {
        return $this->belongsTo('App\User');
    }
}
