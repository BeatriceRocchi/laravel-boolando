<header>
    <div class="container">
        <nav>
            <ul class="menu">
                <li>
                    <a class="{{ Route::currentRouteName() === 'home' ? 'active' : '' }}"
                        href="{{ route('home') }}">Home</a>
                </li>
                <li>
                    <a class="{{ Route::currentRouteName() === 'woman' ? 'active' : '' }}"
                        href="{{ route('woman') }}">Donna</a>
                </li>
                <li>
                    <a class="{{ Route::currentRouteName() === 'man' ? 'active' : '' }}"
                        href="{{ route('man') }}">Uomo</a>
                </li>
                <li>
                    <a class="{{ Route::currentRouteName() === 'child' ? 'active' : '' }}"
                        href="{{ route('child') }}">Bambino</a>
                </li>
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
