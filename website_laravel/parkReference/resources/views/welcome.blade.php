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
                <img class="about-image" src="{{asset("images/about.jpg")}}" alt="">
            </div>
        </div>
        <div class="container direction-reverse">
            <div>
                <iframe class="map" id="gmap_canvas"
                        src="https://maps.google.com/maps?q=28.4160036778%C2%B0,%20-81.5811902834%C2%B0
				&t=&z=13&ie=UTF8&iwloc=&output=embed">

                </iframe>
            </div>
            <div>
                <div class="text-area">
                    <h1 class="subtitle">
                        Voici un <span class="b-neon-text">park</span>
                    </h1>
                    <p id="park-name">
                        Magic Kingdom Park
                    </p>
                    <p id="park-city">
                        ➜ Orlando, Floride
                    </p>
                    <p id="park-type">
                        ➜ Parc d'attractions
                    </p>
                    <a class="neon-button">
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
