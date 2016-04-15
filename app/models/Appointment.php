<?php

class Appointment extends \Eloquent {

    protected $table = 'appointments';

	// Add your validation rules here
	public static $rules = array(
	    'name'    => 'required|min:2|max:100',
	    'email'   => 'required|min:2|max:100',
	    'phone'   => 'max:100',
	    'message' => 'required|min:2|max:50000'
	);

}