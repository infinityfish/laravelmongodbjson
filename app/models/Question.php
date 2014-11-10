<?php

use Jenssegers\Mongodb\Model as Eloquent;

class Question extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'title' => 'required',
		'author' => 'required',
		'description' => 'required',
		'startdate' => 'required',
		'enddate' => 'required',
		'status' => 'required',
		'questionid' => 'required'
	);
}
