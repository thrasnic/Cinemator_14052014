<?php

class CinemaMoviesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($cinema_name)
	{
	    // 1. find movie with given name or bail, cinema not found
	    $cinema = Cinema::where('name' , '=', $cinema_name)->first();
	    if(!$cinema)
	    {
	        // TODO: log or redirect
	        return;
	    }
	    
	    // 2. find all movies for cinema or bail, no session times available
	    $movies = SessionTime::get_movies_for_a_cinema($cinema->id);
        	   
	    $response = Response::make($movies->toJson(), 200);
	    $response->header('Content-Type', 'application/json');
	    
	    return $response;
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
		//
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


}