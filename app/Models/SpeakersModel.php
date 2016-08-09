<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SpeakersModel extends Model
{
    protected $table = 'speakers';

    /**
     * Get the fraction of Speakers.
     */
	public function fraction() {

		return $this->belongsTo('App\Models\FractionModel'); 
		
	}
}
