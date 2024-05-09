@php
    $footer_menu = config('menues.footer');
    $social_icons = config('menues.socials');
@endphp

<footer>
    <div class="container">
        <div>
            <h4>Boolando s.r.l</h4>
            <nav>
                <ul class="references">
                    @foreach ($footer_menu as $item)
                        <li><a href="#">{{ $item['text'] }}</a></li>
                    @endforeach
                </ul>
            </nav>
        </div>
        <div>
            <h4>Trovaci anche su</h4>
            <div class="icons">
                @foreach ($social_icons as $item)
                    <a href="#"><i class="{{ 'fa-brands fa-square-' . $item['name'] }}"></i></a>
                @endforeach
            </div>
        </div>
    </div>
</footer>
