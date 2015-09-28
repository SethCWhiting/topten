@extends('app')

@section('content')

<h1>Lists</h1>
<hr>
<ol>
	@foreach($lists as $list)
		<li>
			<a href="lists/{{ $list->id }}">{{ $list->title }}</a>
		</li>
	@endforeach
</ol>

@stop