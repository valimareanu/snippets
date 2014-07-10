<?php

class Snippets extends \BaseController {

	public function fork($id) {
		$snippet = Snippet::find($id);

		if(!$snippet) return Redirect::route('new_snippet');
		return $this->create($snippet->snippet);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /snippets/create
	 *
	 * @return Response
	 */
	public function create($default_snippet = '')
	{
		return View::make('snippets.create')->with('snippet', $default_snippet);
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /snippets
	 *
	 * @return Response
	 */
	public function store()
	{
		// validate

		$new_snippet = Snippet::create(array('snippet' => Input::get('snippet')));

		if($new_snippet) {
			return Redirect::route('snippet', $new_snippet->id);
		}

		// else
	}

	/**
	 * Display the specified resource.
	 * GET /snippets/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$snippet = Snippet::find($id);
		return View::make('snippets.show', $snippet);
	}
}