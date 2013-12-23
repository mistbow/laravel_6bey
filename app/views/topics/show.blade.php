@extends('layouts.master')

@section('content')
<div class="media"style="margin:10px 0 10px 20px;">
  <a class="pull-right" href="#" style="margin-right:40px;margin-bottom:10px;">
    <img class="media-object" src="/images/1.jpg" width="48" height="48" alt="...">
  </a>
  <div class="media-body" style="margin-top:10px;">
    <h4 class="media-heading">
            <b>{{ $topic->title }}</b>
    </h4>
    {{ \Acme\Utilties\DateUtils::timeago($topic->created_at->getTimestamp())}} 
      by 
    {{ $topic->user->username}} | 最后回复于
    {{ $topic->reply_at }} 
  </div>
</div>
<div style="margin-left:20px;">
        {{ $topic->body }}
</div>
@stop

@section('topic_replies')
<div class="content-unit">
        
  <div class="media">
    共{{ $topic->reply_count }}条回复
  </div>
  @foreach($topic->replies as $reply)
    <div class="media">
                  
      <div class="tools pull-right">
        @if(Auth::check() && $reply->user_id == Auth::user()->id)
          <a class="icon small_edit" href="#" title="修改回复">
            <span class="glyphicon glyphicon-check"></span>
          </a>
          <a class="icon small_delete" data-confirm="确定要删除么？" data-method="delete" href="#" rel="nofollow" title="删除回复">
            <span class="glyphicon glyphicon-trash"></span>
          </a>
        @endif
        <a class="icon small_edit" href="" title="回复">
          <span class="glyphicon glyphicon-share-alt"></span>
        </a>
      </div><!-- end pull-right -->
  
      <a class="pull-left" href="#">
        <img class="media-object" src="/images/1.jpg" width="48" height="48" alt="...">
      </a>
      <div class="media-body">
        <h4 class="media-heading">
                      calvin 回复于一小时以前
        </h4>
          {{ $reply->body }}
      </div>
    </div><!-- end media -->
  @endforeach  
</div>
@stop


@section('create_reply')
<div class="content-unit">
{{ Form::open(['route' => array('topics.replies.store', $topic->id)]) }}
<table class="table">
  <tr>
    <td>
      {{ Form::label('body', '正文：') }}
      {{ Form::textarea('body')}}
      {{ $errors->first('body')}}
    </td>
  </tr>
  <tr>
    <td>
      {{ Form::submit('回复') }}
    </td>
  </tr>
</table>
{{ Form::close() }}
</div>

@stop

@section('sidebar')
	@include('app.sidebar')
@stop