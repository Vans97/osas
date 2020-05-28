<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proposal2 extends Model
{
    protected $table = 'proposals2';
    public $primaryKey='id';
    public $timestamps = true;

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function proposal()
    {
        return $this->belongsTo('App\Proposal');
    }

    
}
