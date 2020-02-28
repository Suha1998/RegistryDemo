@extends('layouts.app')

@section('content')
<a href="/students" class="btn btn-default">Go Back</a>
<h1>{{$student->Name}}</h1>

<div>
    Date of Birth: {{$student->DOB}}
</div>
<div>
    Address: {{$student->address}}
</div>
<div>
    Contact No: {{$student->contact_No}}
</div>
<hr>
<small>Added on {{$student->created_at}}</small>
<hr>
<a href="/students/{{$student->id}}/edit" class="btn btn-default">Edit</a>

{!!Form::open(['action' => ['StudentController@destroy', $student->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
  {{Form::hidden('_method','DELETE')}}
  {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
{!!Form::close()!!}
@endsection