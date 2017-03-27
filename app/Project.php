<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{

	public function tasks(){
		return $this->hasMany('App\Task');
	}

	

       protected $fillable = [
        'name', 'description', 'user_id',
    ];
}
