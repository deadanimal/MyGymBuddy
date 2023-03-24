@extends('layout')

@section('content')

<h1>{{$exercise->name}}</h1>
<table class="table">
    <thead>
      <tr>
        <th scope="col">Timestamp</th>
        <th scope="col">Weight</th>
        <th scope="col">Repetition</th>
        <th scope="col">Remark</th>
      </tr>
    </thead>
    <tbody>
        @forelse($exercise->attempts as $attempts)
      <tr>
        <th scope="row">{{$attempt->created_at}}</th>
        <td>{{$attempt->weight}}</td>
        <td>{{$attempt->repetition}}</td>
        <td>{{$attempt->remark}}</td>
      </tr>
      @empty
      <tr>
        <th scope="row">-</th>
        <td>-</td>
        <td>-</td>
        <td>-</td>
      </tr> 
      @endforelse
    </tbody>
  </table>


<form action="/exercise-attempts/" method="POST">
    @csrf
    <input type="hidden" name="exercise_id" value="{{$exercise->id}}">
    <input type="number" class="form-control" name="weight" placeholder="weight">
    <input type="number" class="form-control" name="repetition" placeholder="reps">
    <input type="text" class="form-control" name="remarks" placeholder="remarks">
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection