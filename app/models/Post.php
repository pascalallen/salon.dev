<?php

class Post extends \Eloquent {

    protected $table = 'posts';

	// Add your validation rules here
	public static $rules = array(
	    'name'        => 'required|min:2|max:100',
	    'email'       => 'min:2|max:100',
	    'description' => 'required|min:2|max:50000',
	    'image'       => 'image'
	);

	public function user()
    {
        return $this->belongsTo('User');
    }
}