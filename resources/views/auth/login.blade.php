@extends('layout')

@section('content')



<form action="/login" method="POST">
    @csrf
    <input type="email" class="form-control" name="email" placeholder="email">
    <input type="password" class="form-control" name="password" placeholder="password">

    <button type="submit" class="btn btn-primary">Login</button>
</form>

@endsection