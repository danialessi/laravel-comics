@extends('layouts.app')

@section('main_content')
    <div class="blue-stripe"></div>
    <section>
        {{-- comic-details  --}}
        <div class="comic-details-container">
            
            {{-- poster  --}}
            <div class="comic-poster">
                <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
            </div>
            {{-- end poster  --}}

            <div class="details-wrapper">
                <div class="details">
                    {{-- title  --}}
                    <div class="comic-title">
                        <h2>{{ $comic['title'] }}</h2>
                    </div>
                    {{-- end title  --}}

                    {{-- price box  --}}
                    <div class="price-box">
                        <div class="price">
                            <span>U.S.Price:</span>
                            <span class="total">{{ $comic ['price'] }}</span>
                        </div>

                        <div class="availability">
                            <span>Available</span>
                        </div>

                        <div class="check-availability">
                            Check Availability
                        </div>
                    </div>
                    {{-- end price box  --}}

                    {{-- description  --}}
                    <div class="description">
                        <p>{{ $comic['description'] }}</p>
                    </div>
                    {{-- end description  --}}
                </div>

                <div class="advertise">
                    <img src="{{ asset('img/noadv.jpg') }}" alt="adv">
                </div>
                    
            </div>
            
        </div>
        

        
        
        {{-- end comic-details  --}}
    </section>
@endsection