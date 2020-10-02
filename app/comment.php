<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    protected $fillable = ['nom','url','body','respond_to_id'];
    protected $with = ['children'];

    public function children()
    {
        return $this->hasMany(comment::class, 'respond_to_id');
    }
}
