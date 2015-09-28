@extends('app')

@section('content')

<h1>Edit {!! $list->title !!}</h1>
<hr>

{!! Form::model($list, ['method'=>'PATCH', 'url'=>'lists/' . $list->id]) !!}

	@include('lists/form', ['submitButtonText'=>'update'])

{!! Form::close() !!}

@include('errors/show')

@stop