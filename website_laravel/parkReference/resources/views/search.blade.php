@extends('base')

@section('title', 'ParkReference - Rechercher')

@section('style')
    <link rel="stylesheet" href="{{asset('css/destinations.css')}}">
@endsection

@section('content')
    <div class="page-content">
        <div class="container" id="search-zone">
            <div class="search-zone">
                <input class="search-input" id="search-input" type="text" placeholder="Rechercher">
                <button class="search-button" id="search-button">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"
                         style="width:24px; height:24px; fill:white;">
                        <path
                            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                    </svg>
                </button>
            </div>
        </div>
        <div id="park-display-area" class="cards-container">
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('js/search.js') }}"></script>
@endsection
