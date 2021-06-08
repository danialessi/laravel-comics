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
                        <img src="{{ $comic['thumb'] }}" alt="">
                        <h5>{{ $comic['series'] }}</h5>
                    </div>
                @endforeach
                
            </div>
            {{-- end comics  --}}
        
        </div>
    </section>
    
    
@endsection