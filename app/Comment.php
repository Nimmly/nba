<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['content'];
    
    public function team()
    {
        return $this->belongsTo('App\Team');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
