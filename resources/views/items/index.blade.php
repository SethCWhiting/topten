@extends('app')

@section('content')

<h1>Items</h1>
<hr>
<ol>
	@foreach($items as $item)
		<li>{{ $item->score }}, {{ $item->name }}, {{ $item->list_id }}</li>
	@endforeach
</ol>

@stop