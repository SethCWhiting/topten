@extends('app')

@section('content')

<h1>New Item</h1>
<hr>

{!! Form::open(['url'=>'/lists/' . $list->id . '/items' ]) !!}

	@include('items/form', ['submitButtonText'=>'save'])

{!! Form::close() !!}

@include('errors/show')

@stop