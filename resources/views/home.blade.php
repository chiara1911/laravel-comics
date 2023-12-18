@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <main>
        <div class="container">
            <h2 class="text-light">DC COMICS</h2>
            <div class="row">
                @foreach ($comics as $comic)
                    <div class="col-12 col-md-3 col-lg-2">
                        <div class="card-wrapper">
                            <div class="img-card overflow-hidden">
                                <img src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}">
                            </div>

                            <span class="p-2 d-flex flex-wrap align-content-center text-light text-uppercase">{{ $comic['title'] }}</span>

                        </div>


                    </div>
                @endforeach

            </div>
        </div>
    </main>
@endsection
