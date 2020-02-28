@extends('layouts.app')

@section('content')
   <h1>Students</h1>
   @if (count($students) > 0)
    @foreach($students as $student)
     <div class = "well">
         <h3><a href ="/students/{{$student->id}}">{{$student->Name}}</a></h3>
         <small>Added on {{$student->created_at}}</small>
     </div>
    @endforeach
     {{$students->links()}} 
   @else
     <p>No Students found</p>
   @endif
@endsection