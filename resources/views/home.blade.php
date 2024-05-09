@extends('layouts.main')

@section('content')
    <main>
        <div class="container">
            @foreach ($products as $product)
                <div class="card">
                    <div class="top-card">

                        <img class="default-img" src="{{ Vite::asset('resources/img/' . $product['frontImage']) }}"
                            alt="{{ $product['brand'] }}" />
                        <img class="hover-img" src="{{ Vite::asset('resources/img/' . $product['backImage']) }}"
                            alt="{{ $product['brand'] }}" />
                        <div class="{{ $product['isInFavorites'] ? 'wish in-wishlist' : 'wish' }}">
                            &hearts;
                        </div>
                        <div class="badges-box">
                            @foreach ($product['badges'] as $badge)
                                <span class="{{ $badge['type'] }}">
                                    {{ $badge['value'] }}</span>
                            @endforeach
                        </div>
                    </div>
                    <div class="bottom-card">
                        <div class="brand">{{ $product['brand'] }}</div>
                        <div class="product">{{ $product['name'] }}</div>
                        <div>
                            {{-- TODO: aggiungere funzione calcolo prezzo e classe sbarrata sul prezzo pieno --}}
                            {{-- <span v-if="calcSalesPrice()" class="discounted-price">{{ calcSalesPrice() }} &euro;
                            </span> --}}
                            <span class="full-price">
                                {{ $product['price'] }} &euro;</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </main>
@endsection
