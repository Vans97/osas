<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{
    protected $table = 'proposals';
    public $primaryKey='id';
    public $timestamps = true;

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function proposals2()
    {
        return $this->hasMany('App\Proposal2');
    }
}
