@extends('layouts.app')

@section('main_content')
    <section class="comics-section black-background">
        <div class="container">
            {{-- title  --}}
            <div class="section-title">
                <h3>CURRENT SERIES</h3>
            </div>
            {{-- end title  --}}
    
            {{-- comics  --}}
            <div class="comics-container">
                @foreach ($comics as $comic)
                    <div class="single-comic">
                        <a href="{{ route('comic', ['id' => $comic['id']]) }}">
                            <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                            <h5>{{ $comic['series'] }}</h5>
                        </a>
                        
                    </div>
                @endforeach
            </div>
            {{-- end comics  --}}

            {{-- button more  --}}
            <div class="button-container">
                <div class="load-more">
                    load more
                </div>
            </div>
            {{-- end button more  --}}
        </div>
    </section>

    <section class="services-list">
        <div class="container">
            <div class="services-images-container">
                
                <div class="image-container">
                    <img src="{{ asset('img/buy-comics-digital-comics.png')}}" alt="digital-comics">
                    <span>Digital comics</span>
                </div>

                <div class="image-container">
                    <img src="{{ asset('img/buy-comics-merchandise.png')}}" alt="digital-comics">
                    <span>DC Merchandise</span>
                </div>

                <div class="image-container">
                    <img src="{{ asset('img/buy-comics-subscriptions.png')}}" alt="digital-comics">
                    <span>Subscription</span>
                </div>

                <div class="image-container">
                    <img src="{{ asset('img/buy-comics-shop-locator.png')}}" alt="digital-comics">
                    <span>Comic Shop Locator</span>
                </div>

                <div class="image-container">
                    <img src="{{ asset('img/buy-dc-power-visa.svg')}}" alt="digital-comics">
                    <span>DC Power Visa</span>
                </div>
                
            </div>
        </div>
    </section>
    
    
@endsection