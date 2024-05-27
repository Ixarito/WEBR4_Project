@extends('base')

@section('title')
    ParkReference - {{$destination->name}}
@endsection

@section('style')
    <!-- home css -->
    <link rel="stylesheet" href="{{asset('css/destination.css')}}">
    <!-- search - for cards -->
    <link rel="stylesheet" href="{{asset('css/destinations.css')}}">
@endsection

@section('content')
<div class="page-content">
    <div class="container">
        <h1 class="subtitle w-neon-text text-center">
            {{$destination->name}}
        </h1>
        <div>
            <iframe class="map" id="gmap_canvas" src="https://maps.google.com/maps?q={{$destination->latitude}}%C2%B0,%20{{$destination->longitude}}%C2%B0
&t=&z=13&ie=UTF8&iwloc=&output=embed" ></iframe>
        </div>
    </div>


    <h2 class="text-center">Liste des parks d'attractions : </h2>

    <div id="park-display-area" class="cards-container">
        @foreach($parks as $park)
            <a class="card destination-card" href="/park/{{$park->id}}">
                @if($park->image)
                    <img class="card-image" src="{{$park->image}}" alt="{{$park->name}}">
                @else
                    <img class="card-image" src="https://placehold.co/600x400?text=ParkReference" alt="{{$park->image}}">
                @endif
                <div class="card-text">
                    <h2 class="card-title">{{$park->name}}</h2>
                </div>
            </a>
        @endforeach
    </div>
</div>

@endsection



