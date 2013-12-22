@extends('layouts.master')

@section('content')
<div class="content-unit">
        <div class="media"style="margin:10px 0 10px 20px;">
          <a class="pull-right" href="#" style="margin-right:40px;margin-bottom:10px;">
            <img class="media-object" src="/images/1.jpg" width="48" height="48" alt="...">
          </a>
          <div class="media-body" style="margin-top:10px;">
            <h4 class="media-heading">
                    <b>{{ $topic->title }}</b>
            </h4>
            1小时以前 by {{ $topic->user->username}} | 最后回复于1小时以前
          </div>
        </div>
        <div style="margin-left:20px;">
                {{ $topic->body }}
        </div>
</div>
@stop

@section('sidebar')
	@include('app.sidebar')
@stop