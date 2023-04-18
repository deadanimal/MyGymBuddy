@extends('layout')

@section('content')



<form action="/register" method="POST">
    @csrf
    <input type="text" class="form-control" name="name" placeholder="name">
    <input type="email" class="form-control" name="email" placeholder="email">
    <input type="password" class="form-control" name="password" placeholder="password">
    <input type="password" class="form-control" name="password_confirmation" placeholder="password_confirmation">

    <button type="submit" class="btn btn-primary">Register</button>
</form>

@endsection