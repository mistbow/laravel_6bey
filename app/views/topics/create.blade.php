@extends('layouts.master')

@section('content')

	<h1>Create New topic</h1>

	{{ Form::open(['route' => 'topics.store']) }}
		<div>
			{{ Form::label('title', '标题：') }}
			{{ Form::text('title')}}
			{{ $errors->first('title')}}
		</div>
		<div>
			{{ Form::label('body', '正文：') }}
			{{ Form::textarea('body')}}
			{{ $errors->first('body')}}
		</div>

		<div>{{ Form::submit('提交') }}</div>
	{{ Form::close() }}
@stop

@section('sidebar')
 @include('app.sidebar')
@stop