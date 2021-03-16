<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = ['content', 'chat_id'];

    public function user()
{
	return $this->belongsTo('App\Models\User');
}
 
public function chat() 
{
	return $this->belongsTo('App\Models\Chat');
}
}
