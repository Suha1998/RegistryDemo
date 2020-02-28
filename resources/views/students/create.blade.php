@extends('layouts.app')

@section('content')
   <h1>Add new student</h1>
   {!! Form::open(['action' => 'StudentController@store', 'method' => 'POST']) !!}
   <div class='form-group'>
       {{Form::label('Name', 'Name')}}
       {{Form::text('Name', '', ['class' => 'form-control', 'placeholder' => 'Name'])}}
   </div>
   <div class='form-group'>
    {{Form::label('DOB', 'Date of Birth')}}
    {{Form::text('DOB', '', ['class' => 'form-control', 'placeholder' => 'Date of Birth'])}}
</div>
<div class='form-group'>
    {{Form::label('address', 'Address')}}
    {{Form::text('address', '', ['class' => 'form-control', 'placeholder' => 'Address'])}}
</div>
<div class='form-group'>
    {{Form::label('contact_No', 'Contact No')}}
    {{Form::text('contact_No', '', ['class' => 'form-control', 'placeholder' => 'Contact No'])}}
</div>
 {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
 {!! Form::close() !!} 
@endsection