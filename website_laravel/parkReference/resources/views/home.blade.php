@extends("base")

@section('title', 'ParkReference')

@section('style')
    <link rel="stylesheet" href="{{asset("css/home.css")}}">
@endsection

@section('content')
    <div class="home-background">
        <div class="home-content">
            <div class="home-title" id="title">ParkReference</div>
            <a class="home-button" id="title-button" href="/search">Rechercher</a>
            <div class="coaster"></div>
            <div class="gradient"></div>
        </div>
    </div>

    <div class="page-content">
        <div id="page-container" class="container">
            <div>
                <div class="text-area">
                    <h1 class="subtitle">
                        Qui sommes <span class="b-neon-text">nous</span>?
                    </h1>
                    <p>
                        Votre guide ultime pour découvrir les parcs d'attractions du monde entier !
                    </p>
                    <p>
                        Grâce à notre base de données complète, vous pouvez explorer une multitude de parcs, découvrir
                        leurs
                        attractions phares, leurs horaires, leurs tarifs et bien plus encore. Que vous soyez un
                        aventurier à
                        la recherche de sensations fortes ou une famille en quête d'une sortie divertissante, The Park
                        Database est votre compagnon de voyage idéal dans le monde merveilleux des parcs d'attractions.
                    </p>
                    <p>
                        Rejoignez-nous dans cette aventure passionnante et commencez à planifier vos prochaines
                        escapades
                        magiques avec <span class="b-neon-text">ParkReference</span> !
                    </p>
                </div>
            </div>
            <div>
                <img class="about-image" src="{{asset("images/about.webp")}}" alt="about image">
            </div>
        </div>
        <div class="container direction-reverse">
            <div>
                @if($park->image)
                    <img class="about-image" src="{{$park->image}}" alt="{{$park->name}}">
                @else
                    <img class="about-image" src="https://placehold.co/600x400?text=ParkReference">
                @endif
            </div>
            <div>
                <div class="text-area">
                    <h1 class="subtitle">
                        Voici un <span class="b-neon-text">park</span>
                    </h1>
                    <p id="park-name">
                        {{$park->name}}
                    </p>
                    <p id="park-city">
                        ➜ Localisation : {{$park->location}}
                    </p>
                    <p id="park-type">
                        ➜ Type : {{$park->type}}
                    </p>
                    <a class="neon-button" href="/park/{{$park->id}}">
                        En savoir plus
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{asset("js/home.js")}}"></script>
@endsection
