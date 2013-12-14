<?php

class TopicsController extends BaseController {

	protected $topic;

	public function __construct(Topic $topic)
	{
		$this->topic = $topic;
	}
	
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $topics = Topic::paginate(10);
        return View::make('topics.index')->withTopics($topics);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return View::make('topics.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();

		if(! $this->topic->fill($input)->isValid()) {
			return Redirect::back()->withInput()->withErrors($this->topic->errors);
		}

		$this->topic->reply_at = new DateTime;
		$this->topic->save();
		
		return Redirect::route('topics.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        $topic = Topic::find($id);
        return View::make('topics.show')->withTopic($topic);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        $topic = Topic::find($id);
        return View::make('topics.edit')->withTopic($topic);
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
