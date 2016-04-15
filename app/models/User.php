<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	protected $table = 'users';

	public static $rules = array(
	    'username'  => 'required|max:100',
	    'email'     => 'required|max:100',
	    'password'	=> 'required|min:6|max:100',
	    'image' 	=> 'image'
	);

	protected $hidden = array('password', 'remember_token');

	public function setPasswordAttribute($value)
    {
    	$this->attributes['password'] = Hash::make($value);
    }

    public function posts()
	{
	    return $this->hasMany('Post');
	}

}
