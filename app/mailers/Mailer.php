<?php namespace Mailers;

class InvalidContactInfoException extends \Exception{}

abstract class Mailer {

	protected $to;
	protected $email;
	protected $subject;
	protected $view;
	protected $data;
	protected $options;

	public function __construct($user)
	{
		if(! is_object($user)) 
		{
			throw new InvalidContactInfoException('please pass a valid user object.');
		}
		$this->to = $user->username;
		$this->email = $user->email;
		$this->data = $user->toArray();
	}

	public function deliver()
	{
		return \Mail::send($this->view, $this->data, function($message){
			$message->to($this->email, $this->to)->subject($this->subject);

			if(is_callable($this->options))
			{
				call_user_func($this->options, $message);
			}
		});
	}
}