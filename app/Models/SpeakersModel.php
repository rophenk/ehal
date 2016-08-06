<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SpeakersModel extends Model
{
    protected $table = 'speakers';

    /**
     * Get the post that owns the comment.
     */
	public function fraction() {

		return $this->belongsTo('App\Models\FractionModel'); 
		
	}
}
