@extends('layouts.master')

@section('content')

	{{ Form::open() }}

		{{ Form::hidden('token', $token)}}
		<div>
		{{ Form::label('email', 'Email Address') }}
		{{ Form::text('email', null, ['required' => true ])}}
		</div>
		
		<div>
		{{ Form::label('password', 'password') }}
		{{ Form::password('password')}}
		</div>

		<div>
		{{ Form::label('password_confirmation', 'password Confirmation') }}
		{{ Form::password('password_confirmation')}}
		</div>

		<div>
			{{ Form::submit('Create new Password')}}
		</div>
	{{ Form::close() }}

	@if (Session::has('error'))
		<p>{{ Session::get('reason')}}</p>
	@endif
@stop