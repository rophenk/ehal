<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AssistantModel extends Model
{
    protected $table = 'assistant';

    /**
     * Get the Speakers.
     */
	public function speakers() {

		return $this->belongsTo('App\Models\SpeakersModel'); 
		
	}
}
