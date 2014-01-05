@extends('layouts.master')

@section('content')
<div class="media"style="margin:10px 0 10px 20px;">
  <a class="pull-right" href="#" style="margin-right:40px;margin-bottom:10px;">
    <img class="media-object" src="/images/1.jpg" width="48" height="48" alt="...">
  </a>
  <div class="media-body" style="margin-top:10px;">
    <h4 class="media-heading">
            <b>{{ $question->title }}</b>
    </h4>
    {{ \Acme\Utilties\DateUtils::timeago($question->created_at->getTimestamp())}} 
      by 
    {{ $question->user->username}} | 最后回复于
  </div>
</div>
<div style="margin-left:20px;">
        {{ $question->body }}
</div>
@stop

@section('sidebar')
 @include('app.questionsidebar')
@stop