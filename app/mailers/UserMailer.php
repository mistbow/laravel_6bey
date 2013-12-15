<?php namespace Mailers;

class UserMailer extends Mailer {

	public function welcome()
	{
		$this->subject = 'Welcome to my site';
		$this->view = 'emails.user.welcome';
		$this->options = function($message) 
		{
			$message->attach(public_path().'/images/1.jpg');
		};
		return $this;
	}

	public function accountCancellation()
	{
		$this->subject = "We're Sorry to See You Go!";
		$this->view = "emails.user.cancel";

		return $this;
	}
}
