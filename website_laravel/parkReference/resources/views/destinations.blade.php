@extends('base')

@section('title', 'ParkReference - Rechercher')

@section('style')
    <link rel="stylesheet" href="{{asset('css/destinations.css')}}">
@endsection

@section('content')
    <div class="page-content">
        <div id="destination-display-area" class="cards-container">
            @foreach($destinations as $destination)
                <div class="card">
                    @if($destination->image)
                        <img class="card-image" src="{{$destination->image}}" alt="{{$destination->name}}">
                    @else
                        <img class="card-image" src="https://placehold.co/600x400?text=ParkReference" alt="{{$destination->name}}">
                    @endif
                    <h2 class="card-title">{{$destination->name}}</h2>
                    <div class="card-text">
                        <a class="neon-button" href="/destinations/{{ $destination->id }}">En savoir plus</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
