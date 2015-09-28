<!-- TEMP -->
{!! Form::hidden('user_id', 1) !!}
<!-- TEMP -->

{!! Form::hidden('list_id', $list->id) !!}

{!! Form::label('name', 'Name:') !!}
{!! Form::text('name') !!}

{!! Form::submit($submitButtonText) !!}