<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $guarded = [];

    public function questionnnaire()
    {
        return $this->belongsTo(Questionnnaire::class);
    }

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }
}
