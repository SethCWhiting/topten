@extends('app')

@section('content')

<h1>New List</h1>
<hr>

{!! Form::open(['url'=>'/lists']) !!}

	@include('lists/form', ['submitButtonText'=>'save'])

{!! Form::close() !!}

@include('errors/show')

@stop