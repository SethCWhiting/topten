@extends('app')

@section('content')

<h1>{{ $list->title }}</h1>
<hr>
<ol>
	@foreach($items as $item)
		<li>
			<a href="/lists/{{ $list->id }}/items/{{ $item->id }}">
				{{ $item->score }}, {{ $item->name }}, {{ $item->list_id }}
			</a>
		</li>
	@endforeach
</ol>

@stop