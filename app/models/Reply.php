<?php

class Reply extends Eloquent {
	protected $guarded = array();

	protected $fillable = ['body', 'user_id', 'topic_id'];

	public static $rules = array();

	public function topic()
    {
        return $this->belongsTo('Topic');
    }
}
