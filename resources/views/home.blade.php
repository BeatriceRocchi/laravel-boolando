<?php
function calcSalesPrice($product)
{
    $salesPrice = 0;
    foreach ($product['badges'] as $badge) {
        if ($badge['type'] === 'discount') {
            $salesPrice = $product['price'];
            $salesPrice *= 1 - abs(floatval($badge['value'])) / 100;
        }
    }

    return $salesPrice ? number_format($salesPrice, 2) : null;
}
?>

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
                            @if (calcSalesPrice($product))
                                <span class="discounted-price">{{ calcSalesPrice($product) }} &euro;
                                </span>
                            @endif
                            <span class="{{ calcSalesPrice($product) ? 'strike full-price' : 'full-price' }}">
                                {{ $product['price'] }} &euro;</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </main>
@endsection
