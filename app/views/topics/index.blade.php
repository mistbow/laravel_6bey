@extends('layouts.master')

@section('content')
	@foreach($topics as $topic)
		<div class="media">
        <span class="label label-info pull-right" style="margin-top:5px;">
        	<a href="{{ route('topics.show', ['topics' => $topic->id]) }}" style='color:white'>
				{{ $topic->reply_count}}
        	</a>
        </span>
		  <a class="pull-left" href="#">
		  	<img src="images/1.jpg" alt="" class='media-object' width="48px"  height="48px">
		  	
		  </a>
		  <div class="media-body">
		    <h4 class="media-heading">
		    	<a href="{{ route('topics.show', ['topics' => $topic->id]) }}">
					{{ $topic->title}}
		    	</a>
		    </h4>
		    {{ \Acme\Utilties\DateUtils::timeago($topic->created_at->getTimestamp())}} by {{ $topic->user->username }} | 最后回复于{{ $topic->reply_at }} 
		  </div>
		</div>
	@endforeach

	<div style="text-align:center;">
        <div class="pagination pagination-large">
                <?php echo $topics->links(); ?>
        </div>
	</div>
	
@stop
@section('sidebar')
 @include('app.sidebar')
@stop