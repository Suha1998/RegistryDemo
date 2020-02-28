@extends('layouts.app')

@section('content')
   <h1>Edit student</h1>
   {!! Form::open(['action' => ['StudentController@update', $student->id], 'method' => 'POST']) !!}
   <div class='form-group'>
       {{Form::label('Name', 'Name')}}
       {{Form::text('Name', $student->Name, ['class' => 'form-control', 'placeholder' => 'Name'])}}
   </div>

   <div class='form-group'>
    {{Form::label('DOB', 'Date of Birth')}}
    {{Form::text('DOB', $student->DOB, ['class' => 'form-control', 'placeholder' => 'Date of Birth'])}}
</div>

<div class='form-group'>
    {{Form::label('address', 'Address')}}
    {{Form::text('address', $student->address, ['class' => 'form-control', 'placeholder' => 'Address'])}}
</div>

<div class='form-group'>
    {{Form::label('contact_No', 'Contact No')}}
    {{Form::text('contact_No', $student->contact_No, ['class' => 'form-control', 'placeholder' => 'Contact No'])}}
</div>

 {{Form::hidden('_method','PUT')}}
 {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
 {!! Form::close() !!} 
@endsection