@php
    $header_menu = config('menues.header');

@endphp

<header>
    <div class="container">
        <nav>
            <ul class="menu">
                @foreach ($header_menu as $item)
                    <li>
                        <a class="{{ Route::currentRouteName() === $item['name'] ? 'active' : '' }}"
                            href="{{ route($item['name']) }}">{{ $item['text'] }}</a>
                    </li>
                @endforeach
            </ul>
        </nav>
        <img src="/img/boolean-logo.png" alt="Logo boolean" />
        <div>
            <i class="fa-regular fa-user"></i>
            <i class="fa-regular fa-heart"></i>
            <i class="fa-solid fa-bag-shopping"></i>
        </div>
    </div>
</header>
