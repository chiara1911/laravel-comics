@extends('layouts.app')

@section('title' , 'Home')

@section('content')
<main>
    <h1>Home page</h1>
    <div class="container">
        <h2>DC COMICS</h2>
        <div class="row">
            @foreach ($comics as $comic)
            <div class="col-12 col-md-4 col-lg-3 mt-2">
                <img src="{{$comic['thumb']}}" alt="">
            </div>

            @endforeach
        </div>
    </div>
</main>
@endsection
