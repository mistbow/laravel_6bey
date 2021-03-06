<?php

class Topic extends Eloquent {
	protected $guarded = array();

	protected $fillable = array('title', 'body', 'user_id', 'reply_count', 'reply_at');

	public static $rules = array(
			'title' => 'required',
			'body' => 'required',
	);

	public function replies()
    {
        return $this->hasMany('Reply');
    }


	public $errors;

	public function user()
    {
        return $this->belongsTo('User');
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
