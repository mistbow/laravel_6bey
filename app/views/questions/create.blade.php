@extends('layouts.master')

@section('content')

	<h1>Create New Question</h1>

	{{ Form::open(['route' => 'questions.store']) }}
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
		<div>
			{{ Form::label('tags', '标签：') }}
			{{ Form::text('tags')}}
			{{ $errors->first('tags')}}
		</div>
		<div>
			{{ Form::label('score', '分数：') }}
			{{ Form::text('score')}}
			{{ $errors->first('score')}}
		</div>

		<div>{{ Form::submit('提交') }}</div>
	{{ Form::close() }}
@stop

@section('sidebar')
 @include('app.questionsidebar')
@stop