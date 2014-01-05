<?php

class Tag extends Eloquent {
	protected $guarded = array();

	public static $rules = array();

	public function questions() {
         return $this->
           belongsToMany('Question','question_tags')->
           withTimestamps();
    }	
}
