@extends('layout')

@section('content')

<h1>{{$exercise->name}}</h1>

<form action="/exercise-attempts/" method="POST">
    @csrf
    <input type="hidden" name="exercise_id" value="{{$exercise->id}}">
    <input type="number" class="form-control" name="weight" placeholder="weight">
    <input type="number" class="form-control" name="repetition" placeholder="reps">
    <input type="text" class="form-control" name="remarks" placeholder="remarks">
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection