@extends('base')

@section('title', 'Rides')

@section('style')
    <!-- park -->
    <link rel="stylesheet" href="{{asset('css/park.css')}}">
    <link rel="stylesheet" href="{{asset('css/rides.css')}}">
@endsection

@section('content')
    <div class="page-content">
        <div class="container rides-title-zone">
            <h1>Toutes les attractions</h1>
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
@endsection
