<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Event extends Model
{
    protected $table ='events';
    public $primaryKey='id';
    public $timestamps = true;
    protected $fillable = ['title','color','start_date','end_date','driver'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
