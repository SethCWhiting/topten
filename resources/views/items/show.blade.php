@extends('app')

@section('content')

<h1>{{ $item->name }}</h1>
<hr>
<h4>Comments:</h4>
<ul>
	@foreach($comments as $comment)
		<li>{{ $comment->body }}</li>
	@endforeach
</ul>

@stop