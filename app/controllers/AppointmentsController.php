<?php

class AppointmentsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$appointment = new Appointment();
		Log::info(Input::all());
		return $this->validateAndSave($appointment);
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	protected function validateAndSave($appointment)
	{
		$validator = Validator::make(Input::all(), Appointment::$rules);

		if ($validator->fails()) {
			$validator->messages();
	        // validation failed, redirect to the appointment create page with validation errors and old inputs
	        return Redirect::back()->withInput()->withErrors($validator);
	    } else {
	    	
			$appointment->name = Input::get('name');
			$appointment->email = Input::get('email');
			$appointment->phone = Input::get('phone');
			$appointment->message = Input::get('message');
			$appointment->user_id = Auth::id();

			$result = $appointment->save();

			if($result) {
				Session::flash('successMessage', 'Your appointment has been saved.');
				return Redirect::action('AppointmentsController@show', $appointment->id);
			} else {
				return Redirect::back()->withInput();
			}
		}
	}


}
