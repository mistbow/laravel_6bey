<?php

class RepliesController extends BaseController {

	protected $reply;

	public function __construct(Reply $reply)
	{
		$this->reply = $reply;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        return View::make('replies.index');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return View::make('replies.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store($topic_id)
	{
		$rules = array(
            'body' => 'required|min:5'
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->passes())
        {
        	$this->reply->body = Input::get('body');
        	$this->reply->topic_id = $topic_id;
        	$this->reply->user_id = Auth::user()->id;
        	if($this->reply->save())
        	{
        		return Redirect::to('topics/'.$topic_id);
        	}
        }

        return Redirect::to('topics/' . $topic_id)->withInput()->withErrors($validator);

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($topic_id, $id)
	{
        return View::make('replies.show');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        return View::make('replies.edit');
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
