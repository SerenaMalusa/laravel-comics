<header id="header">

    {{-- @dd(Route::currentRouteName()) --}}
    
    <div class="bg-primary text-light" id="blue-bar">
    
        <div class="container d-flex justify-content-end gap-4 text-uppercase">
            <p class="mb-1">DC POWER™ VISA®</p>
            <p class="mb-1">
                ADDITIONAL DC SITES
                <i class="fa-solid fa-caret-down"></i>
            </p>
        </div>
        
    </div>
    
    <div class="container d-flex justify-content-between align-items-center fw-semibold">
        <a href="{{ route('home') }}">
            <img src="{{ url('/dc-logo.png') }}" alt="">
        </a>
        
        <nav class="text-uppercase">
            <ul class="d-flex gap-4 ps-0 mb-0">

                {{-- @foreach (config('headerLinks') as $link)
                    <li>
                        <a href="{{ route($link) }}" @class(['active' => Route::currentRouteName() == $link])>
                            {{ $link }}
                        </a>
                    </li>
                @endforeach --}}

                <li>
                    <a href="#">carachters</a>
                </li>
                <li>
                    <a href="{{ route('comics') }}">Comics</a>
                </li>
                <li>
                    <a href="#">movies</a>
                </li>
                <li>
                    <a href="#">tv</a>
                </li>
                <li>
                    <a href="#">games</a>
                </li>
                <li>
                    <a href="#">collectibles</a>
                </li>
                <li>
                    <a href="#">videos</a>
                </li>
                <li>
                    <a href="#">fans</a>
                </li>
                <li>
                    <a href="#">news</a>
                </li>
                <li>
                    <a href="#">
                        shop
                        <i class="fa-solid fa-caret-down text-primary"></i>
                    </a>
                </li>

            </ul>
        </nav>

        <div class="search col-1 text-end">
            Search
            <i class="fa-solid fa-magnifying-glass"></i>
        </div>
    </div>

</header>
