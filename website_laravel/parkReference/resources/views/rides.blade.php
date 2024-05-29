@extends('base')

@section('title', 'Rides')

@section('style')
    <!-- park -->
    <link rel="stylesheet" href="{{asset('css/park.css')}}">
@endsection

@section('content')
    <div class="page-content">
        <div class="container rides-title-zone">
            <h1>Toutes les attractions</h1>
            <div>
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
            <div>
                <label for="cars">Filtrer :</label>
                <select name="types" id="types">
                    <option value="all">Tout</option>
                    @foreach($allRideTypes as $type)
                        <option value="{{$type}}">{{$type}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="container">
            <div class="park-table">
                <table id="park-rides">
                    <tr>
                        <th>Nom</th>
                        <th>Type</th>
                        <th>Capacité</th>
                    </tr>
                    @foreach($rides as $ride)
                        @if($ride->type)
                            <tr class="park-ride {{$ride->type->name}}">
                                <td><a href="{{$ride->parkLink}}" class="b-neon-text">{{$ride->name}}</a></td>
                                @if ($ride->type)
                                    <td>{{$ride->type->name}}</td>
                                @else
                                    <td>/</td>
                                @endif
                                @if($ride->capacity)
                                    <td>{{$ride->capacity}}</td>
                                @else
                                    <td>/</td>
                                @endif
                            </tr>
                        @else
                            <tr class="park-ride ">
                                <td>{{$ride->name}}</td>
                                @if ($ride->type)
                                    <td>/</td>
                                @else
                                    <td>/</td>
                                @endif
                                @if($ride->capacity)
                                    <td>{{$ride->capacity}}</td>
                                @else
                                    <td>/</td>
                                @endif
                            </tr>
                        @endif

                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{asset('js/park.js')}}"></script>
    <script src="{{asset('js/rides.js')}}"></script>
@endsection
