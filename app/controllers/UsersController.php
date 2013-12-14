<?php 

class UsersController extends BaseController {

	public function __construct() {
		$this->beforeFilter('csrf', array('on'=>'post'));
		$this->beforeFilter('auth', array('only'=>array('getDashboard')));
	}

	public function getDashboard() {
    	return View::make('users.dashboard');
	}

	public function getLogin() {
		return View::make('users.login');
	}

	public function getLogout() {
    	Auth::logout();
		return Redirect::to('users/login')->with('message', '成功退出登录！');
	}

	public function getRegister() {
	   return View::make('users.register');
	}

	public function postSignin() {
        if (Auth::attempt(array('email'=>Input::get('email'), 'password'=>Input::get('password')))) {
			return Redirect::to('users/dashboard')->with('message', '登录成功!');
		} else {
			return Redirect::to('users/login')
				->with('message', '密码错误')
				->withInput();
		}
	}

	public function postCreate() {
    	$validator = Validator::make(Input::all(), User::$rules);
 
		if ($validator->passes()) {
			$user = new User;
			$user->username = Input::get('username');
			$user->email = Input::get('email');
			$user->password = Hash::make(Input::get('password'));
			$user->active = 1;
			$user->save();

			return Redirect::to('users/login')->with('message', 'Thanks for registering!');
		} else {
			return Redirect::to('users/register')->with('message', 'The following errors occurred')->withErrors($validator)->withInput();
		}   
	}
}