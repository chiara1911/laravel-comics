@extends('layouts.app')
@section('title', 'Characters')
@section('content')

<main class=" bg-light">
    <div class="container ">
        <h2>Characters</h2>
        <div class="row">
            <div class="col-9 d-flex flew-row ">
                @foreach ($characters as $character)
                <div class="col-3 col-md-3 col-lg-2 m-3">
                        <div class="img-card overflow-hidden">
                            <img src="{{ $character['image'] }}" alt="{{ $character['name'] }}"></a>
                        </div>
                        <span
                            class="p-2 d-flex flex-wrap align-content-center text-uppercase">{{ $character['name'] }}</span>
                </div>
            @endforeach
            </div>
        </div>
    </div>
</main>
@endsection
