<?php

class Question extends Eloquent {
	protected $guarded = array();

	protected $fillable = array('title', 'body', 'user_id', 'score');

	public static $rules = array(
			'title' => 'required',
			'body' => 'required',
			'score' => 'required|integer',
	);

	public function user() {
        return $this->belongsTo('User','user_id');
	}

	public function tags() {
         return $this->belongsToMany('Tag','question_tags')->
           withTimestamps();
    }

    public function isValid() 
	{
		
		$validation = Validator::make($this->attributes, static::$rules);

		if($validation->passes()) {
			return TRUE;
		} 

		$this->errors = $validation->messages();
		return FALSE;
		
	}
}
