@extends('layouts.app')

@section('title', 'create')

@section('content')

    @php
        $items = config('items.items');
    @endphp
    <main>
        <form action="{{ route('comics.store') }}" method="POST">
            {{-- token --}}
            @csrf
            <input type="text" id="title" name="title" placeholder="inserisci un titolo" class="form-control">
            <input type="text" id="description" name="description" placeholder="inserisci una descrizione"
                class="form-control">
            <input type="text" id="price" name="price" placeholder="inserisci un prezzo" class="form-control">
            <input type="text" id="type" name="type" placeholder="inserisci un tipo" class="form-control">
            <button type="submit">Invia

            </button>
        </form>

        {{-- <div class="container ">
            <div class="row">
                <div class="col-12 m-4">
                    <div class="d-flex flex-row">
                        <img src="{{ $comic->thumb }}" alt="{{ $comic->series }}" class="big-image">
                        <div class="d-flex flex-column px-4 text-light text-uppercase">
                            <h3>title: {{ $comic->title }}</h3>
                            <h4>description {{ $comic->description }}</h4>
                            <div class="mt-3 d-flex justify-content-between ">
                                <span class="btn btn-primary  p-3">{{ $comic->price }}</span>
                                <span class="d-flex flex-column">data di uscita :
                                    <span>{{ $comic->sale_date }}</span></span>
                            </div>

                        </div>

                    </div>
                </div>


            </div>


        </div> --}}
        </div>


    </main>
@endsection
