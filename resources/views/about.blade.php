@extends('template')
@section('title', 'Home')

@section('content')
    <h1>Sobre mi</h1>
    <div class="about">
        <figure class="image__wrapper">
            <img class="image__cover" src="{{ Vite::asset('resources/images/bibi.webp') }}" alt="algo">
        </figure>
        <div class="about__content">
            <header>
                <p>Hola soy Bianca M, el alma de Perla Da Lúa y creadora de Mantura Manos Natura.</p>
            </header>
            <hr>
            <p>Soy Quiromasajista de profesión y artesana, dibujante e ilustradora por vocación. Creadora intuitiva de
                fantasías, investigadora de los saberes ancestrales y peregrina de la senda espiritual femenina.</p>
            <p>Camino proyectando y materializando obras artísticas llenas de simbolismo que exploran el reino
                metafísico y la esencia de la Madre Tierra con un misticismo fantástico.</p>
            <figure class="image__draw jumbotron">
                <img src="{{ Vite::asset('resources/images/Dibujos/dibujo_bibi.jpeg') }}" alt="algo">
            </figure>
            <p>Nací en un hogar biracial, cosa que me ha enriquecido bellamente, y crecí en la provincia de Alicante.
                Afortunadamente en la actualidad, vivo en una casita de campo rodeada de naturaleza.</p>
            <p>En estos últimos años,
                por el trabajo mi estilo de vida ha implicado mucho movimiento constante, algo que me encanta, y aunque
                siempre vuelvo a mi hogar, me pasaría la vida entera viajando pues
                se que soy un espíritu eternamente nómada.</p>
            <hr>
        </div>
    </div>
@endsection
