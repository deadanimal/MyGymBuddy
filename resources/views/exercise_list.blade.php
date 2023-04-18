@extends('layouts.app')

@section('content')


<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
      </tr>
    </thead>
    <tbody>
        @forelse($exercises as $exercise)
      <tr>
        <th scope="row">{{$loop->iteration}}</th>
        <td><a href="/exercises/{{$exercise->id}}">{{$exercise->name}}</a></td>
      </tr>
      @empty
      <tr>
        <th scope="row">-</th>
        <td>-</td>
      </tr> 
      @endforelse
    </tbody>
  </table>



<form action="/exercises" method="POST">
    @csrf
    <input type="text" class="form-control" name="name">
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection