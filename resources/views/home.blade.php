@extends('layouts.main')

@section('content')
    <main>
        <div class="container">
            @foreach ($products as $product)
                <div>{{ $product['brand'] }}</div>
                {{-- <div class="card">
                    <div class="top-card">
                        <img class="default-img" :src="{{Vite::assets('resources/img/$product['frontImage']')}}" :alt="{{$product['brand']}}" />
                        <img class="hover-img" :src="{{Vite::assets('resources/img/$product['backImage']')}}" :alt="{{$product['brand']}}" />
                        <div class="wish" :class="{ 'in-wishlist': productObject.isInFavorites }">
                            &hearts;
                        </div>
                        <div class="badges-box">
                            <span v-for="(badge, index) in productObject.badges" :key="index"
                                :class="badge.type">
                                {{ badge . value }}</span>
                        </div>
                    </div>
                    <div class="bottom-card">
                        <div class="brand">{{ productObject . brand }}</div>
                        <div class="product">{{ productObject . name }}</div>
                        <div>
                            <span v-if="calcSalesPrice()" class="discounted-price">{{ calcSalesPrice() }} &euro;
                            </span>
                            <span class="full-price" :class="{ strike: calcSalesPrice() }">
                                {{ productObject . price }} &euro;</span>
                        </div>
                    </div>
                </div> --}}
            @endforeach

        </div>
    </main>
@endsection
