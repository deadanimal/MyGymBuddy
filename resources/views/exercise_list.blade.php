@extends('layouts.app')

@section('content')

    @extends('layouts.app')

@section('content')

    <header class="py-10 ">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 mt-3">
            <h1 class="text-3xl font-bold tracking-tight">List of Exercise</h1>
        </div>
    </header>


    <main class="-mt-32">

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
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td><a href="/exercises/{{ $exercise->id }}">{{ $exercise->name }}</a></td>
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
    </main>

@endsection
