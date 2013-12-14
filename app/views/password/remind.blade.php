@extends('layouts.master')

@section('content')
	<h1>Reset your password</h1>

	{{ Form::open() }}
		<div>
		{{ Form::label('email', 'Email Address') }}
		{{ Form::text('email', null, ['required' => true ])}}
		</div>

		<div>
			{{ Form::submit('Reset')}}
		</div>
	{{ Form::close() }}

	@if(Session::has('error'))
		<p>{{ Session::get('error') }}</p>
	@elseif(Session::has('status'))
		<p>{{ Session::get('status') }}</p>
	@endif
@stop