@php
    $comics = config('footnav.comics');
    $shops = config('footnav.shop');
    $dcs = config('footnav.dc');
    $sites = config('footnav.sites');
@endphp

<div class="container ">
    <div class="row py-2">
        <div class="d-flex justify-content-between position-relative overflow-hidden">

            <div class="row">
                <div class="col-4">
                    <ul>
                        <h4 class="text-uppercase text-light">dc comics</h4>
                        @foreach ($comics as $comic)
                            <li>{{ $comic }}</li>
                        @endforeach

                    </ul>
                    <ul>
                        <h4 class="text-uppercase text-light">shop</h4>
                        @foreach ($shops as $shop)
                            <li>{{ $shop }}</li>
                        @endforeach

                    </ul>
                </div>

                <div class="col-4">
                    <ul>
                        <h4 class="text-uppercase text-light">dc</h4>
                        @foreach ($dcs as $dc)
                            <li>{{ $dc }}</li>
                        @endforeach
                        </li>
                    </ul>
                </div>
                <div class="col-4">
                    <ul>
                        <h4 class="text-uppercase text-light">sites</h4>
                        @foreach ($sites as $site)
                            <li> {{ $site }}</li>
                        @endforeach
                        </li>
                    </ul>
                </div>
            </div>


            <div class="position-absolute" id="footer-img">
                <img src="/resources/img/dc-logo-bg.png" alt="dc-logo-bg" />
            </div>
        </div>
    </div>
</div>
