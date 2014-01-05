@extends('layouts.master')

@section('content')
	@foreach($questions as $question)
		<div class="media">
        <span class="label label-info pull-right" style="margin-top:5px;">
        	<a href="{{ route('questions.show', ['questions' => $question->id]) }}" style='color:white'>
				{{ $question->reply_count}}
        	</a>
        </span>
		  <a class="pull-left" href="#">
		  	<img src="images/1.jpg" alt="" class='media-object' width="48px"  height="48px">
		  	
		  </a>
		  <div class="media-body">
		    <h4 class="media-heading">
		    	<a href="{{ route('questions.show', ['questions' => $question->id]) }}">
					{{ $question->title}}
		    	</a>
		    </h4>
		    {{ \Acme\Utilties\DateUtils::timeago($question->created_at->getTimestamp())}} by {{ $question->user->username }} | 最后回复于{{ $question->reply_at }} 
		  </div>
		</div>
	@endforeach

	<div style="text-align:center;">
        <div class="pagination pagination-large">
                <?php echo $questions->links(); ?>
        </div>
	</div>
	
@stop
@section('sidebar')
 @include('app.questionsidebar')
@stop