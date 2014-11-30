<?php

class Task extends Eloquent
{
	protected $fillable = array('task_name', 'notes', 'done', 'due_date');

	public function user()
	{
		return $this->belongsTo('User');
	}
}