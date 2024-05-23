@extends('base')

@section('title')
    Park - {{$park->name}}
@endsection

@section('style')
    <!-- park -->
    <link rel="stylesheet" href="{{asset('css/park.css')}}">
@endsection

@section('content')
    <div class="page-content">
        <div class="container">
            <a class="subtitle b-neon-text text-center" id="park-name" href="{{$park->url}}" target="_blank">
                {{$park->name}}
            </a>
        </div>
        @if($park->blurb)
            <div class="container">
                <div class="text-center text-area">
                    {{-- TUCHY ! --}}
                    {!! $park->blurb  !!}
                </div>
            </div>
        </div>
        @endif
        <div class="container direction-reverse">
            <div id="park-info-area" class="text-area">
                @if($park->name)
                    <p>Nom : <span class="b-neon-text">{{ $park->name }}</span></p>
                @endif
                @if($park->location)
                    <p>Emplacement : <span class="b-neon-text">{{ $park->location }}</span></p>
                @endif
                @if($park->timezone)
                    <p>Fuseau horaire : <span class="b-neon-text">{{ $park->timezone }}</span></p>
                @endif
                @if($park->size)
                    <p>Taille : <span class="b-neon-text">{{ $park->size }}</span></p>
                @endif
                @if($park->cost)
                    <p>Coût : <span class="b-neon-text">{{ $park->cost }}</span></p>
                @endif
                @if($park->country)
                    <p>Pays : <span class="b-neon-text">{{ $park->country }}</span></p>
                @endif
                @if($park->type)
                    <p>Type : <span class="b-neon-text">{{ $park->type }}</span></p>
                @endif
                @if($park->year_built)
                    <p>Année de construction : <span class="b-neon-text">{{ $park->year_built }}</span></p>
                @endif
                @if($park->capacity)
                    <p>Capacité : <span class="b-neon-text">{{ $park->capacity }}</span></p>
                @endif
                @if($park->adultPrice)
                    <p>Prix adulte : <span class="b-neon-text">{{ $park->adultPrice }}</span></p>
                @endif
                @if($park->childPrice)
                    <p>Prix enfant : <span class="b-neon-text">{{ $park->childPrice }}</span></p>
                @endif
                @if($park->capacityPerAttendance)
                    <p>Capacité par présence : <span class="b-neon-text">{{ $park->capacityPerAttendance }}</span></p>
                @endif
                @if($park->attendancePerSize)
                    <p>Présence par taille : <span class="b-neon-text">{{ $park->attendancePerSize }}</span></p>
                @endif
                @if($park->sizePerCapacity)
                    <p>Taille par capacité : <span class="b-neon-text">{{ $park->sizePerCapacity }}</span></p>
                @endif

            </div>
            <div>
                @if($park->image)
                    <img class="about-image" id="park-image" src="{{$park->image}}" alt="">
                @else
                    <img class="about-image" id="park-image" src="https://placehold.co/600x400?text=ParkReference" alt="">
                @endif
            </div>
        </div>
    <div class="container rides-title-zone">
        <h1>Attractions</h1>
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
                        <tr id="park-ride" class="{{$ride->type->name}}">
                            <td>{{$ride->name}}</td>
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
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{asset('js/park.js')}}"></script>
@endsection
