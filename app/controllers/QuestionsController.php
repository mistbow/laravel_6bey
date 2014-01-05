<?php

class QuestionsController extends BaseController {

	protected $question;

	public function __construct(Question $question)
	{
		$this->question = $question;
	}


	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$questions = Question::with('user', 'tags')->paginate(10);
        return View::make('questions.index')->with('questions', $questions);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return View::make('questions.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();

		if(! $this->question->fill($input)->isValid()) {
			return Redirect::back()->withInput()->withErrors($this->question->errors);
		}

		$this->question->user_id = Auth::user()->id;
		$this->question->save();

		if(Str::length(Input::get('tags'))) {
			$tags_array = explode(',', Input::get('tags'));
			if(count($tags_array)) {
				foreach ($tags_array as $key => $tag) {
					$tag = trim($tag);
					if(Str::length(Str::slug($tag))) {
						$tag_friendly = Str::slug($tag);
						$tag_check = Tag::where('tag_friendly',$tag_friendly);
						if($tag_check->count() == 0) {
							$tag_info = Tag::create(array(
								'tag' => $tag,
								'tag_friendly' => $tag_friendly,
								));
						} else {
							$tag_info = $tag_check->first();
						}
					}
					$this->question->tags()->attach($tag_info->id);
					return $this->question;
				}
			}
		}
		return $this->question;
		return Redirect::route('questions.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$question = Question::with('user')->find($id);
        return View::make('questions.show')->with('question', $question);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        return View::make('questions.edit');
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
