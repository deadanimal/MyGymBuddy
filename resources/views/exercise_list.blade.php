@extends('layout')

@section('content')

@forelse($exercises as $exercise)
<a href="/exercises/{{$exercise->id}}">{{$exercise->name}}</a>
@empty
---
@endforelse

<form action="/exercises" method="POST">
    @csrf
    <input type="text" class="form-control" name="name">
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection