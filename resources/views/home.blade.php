@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-4">
            @foreach ($allApartments as $apartment)
                <div class="card">
                    <div class="card-header">
                        {{ $apartment->user_id}}
                        {{ $apartment->title}}
                    </div>

                    <div class="card-body">
                        {{ $apartment->n_beedroom}}
                        {{ $apartment->n_beds}}
                        {{ $apartment->n_bathrooms}}
                        {{ $apartment->square_meters}}
                        {{ $apartment->adress}}
                        <a href="{{ route('apartment.show', $apartment)}}">
                            <img class="img-fluid" src=" {{ $apartment->img}}" alt="{{ $apartment->title}}">
                        </a>
                        {{ $apartment->price_per_night}}             
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
