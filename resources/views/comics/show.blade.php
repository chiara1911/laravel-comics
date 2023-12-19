@extends('layouts.app')

@section('title', $comic['title'])

@section('content')

    @php
        $items = config('items.items');
    @endphp
    <main>

        <div class="container">

            <h2 class="text-light">DC COMICS</h2>
            <div class="row">

                    <div class="col-12">
                        <div class=" d-flex flex-row">
                                <img src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}"  id="big-image">
                                <div class="d-flex flex-column px-4 text-light text-uppercase">
                                    <h3
                                    >title: {{ $comic['title']}}</h3>
                                    <h4 >description {{$comic['description']}}</h4>
                                    <div class="mt-3 d-flex justify-content-between ">
                                        <span class="bg-primary  p-3">{{$comic['price']}}</span>
                                        <span class="d-flex flex-column">data di uscita : <span>{{$comic['sale_date']}}</span></span>
                                    </div>

                                </div>

                            </div>
                        </div>


                    </div>


            </div>
        </div>

        {{-- <div id="bottom-main" class=" bg-primary">
            <div class="container">
                <ul class="d-flex flex-row justify-content-between m-0 p-2">
                    @foreach ($items as $item)
                        <li class="p-1 text-light text-uppercase d-flex flex-row">
                            <a href="#"><img src="{{ Vite::asset($item['img']) }}" alt=""
                                    class="shop-img" /></a>
                            <span class="p-2 d-flex flex-wrap align-content-center">
                                {{ $item['text'] }}
                            </span>
                        </li>
                    @endforeach

                </ul>
            </div>
        </div> --}}
    </main>
@endsection
