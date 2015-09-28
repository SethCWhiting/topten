@extends('app')

@section('content')

<h1>Edit {!! $item->name !!}</h1>
<hr>

{!! Form::model($item, ['method'=>'PUT', 'url'=>'lists/' . $list->id . '/items/' . $item->id]) !!}

	@include('items/form', ['submitButtonText'=>'update'])

{!! Form::close() !!}

@include('errors/show')

@stop