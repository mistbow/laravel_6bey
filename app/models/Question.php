<?php

class Question extends Eloquent {
	protected $guarded = array();

	public static $rules = array();

	public function users() {
        return $this->belongsTo('User','user_id');
	}

	public function tags() {
         return $this->belongsToMany('Tag','question_tags')->
           withTimestamps();
    }
}
