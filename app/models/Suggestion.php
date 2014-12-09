<?php

class Suggestion extends Eloquent
{
	public function user()
	{
		return $this->belongsTo('User');
	}
}