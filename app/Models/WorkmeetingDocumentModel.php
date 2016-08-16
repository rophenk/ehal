<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WorkmeetingDocumentModel extends Model
{
    protected $table = 'workmeeting_document';

    public function workmeeting() {

		return $this->belongsTo('App\Models\WorkmeetingModel'); 
		
	}
}
