@extends('template')
@section('title', 'Home')

@section('content')
    <article class="home">
        <header class="home__header">
            <figure>
                <img src="{{ Vite::asset('resources/images/bienvenida.webp') }}" alt="algo">
                {{--Seria mejor que fuese texto--}}
            </figure>
        </header>
        <p>Este es un espacio íntimo y personal que he creado para ti, un lugar donde podrás relajarte y redescubrir
            tus dones naturales y creativos.</p>
        <p>Mi propuesta de trabajo se basa en facilitarte información y pequeñas herramientas artísticas de
            exploración y transformación, con las que despertar tu creatividad, poder armonizarte y reconectar de
            manera apasionada con tu esencia y naturaleza creadora.</p>

        <figure class="return_to_you">
            <img src="{{ Vite::asset('resources/images/de_vuelta_a_ti.webp') }}" alt="algo">
        </figure>
        <p>Así pues te presento <strong>DE VUELTA A TI</strong> un proyecto artístico por el cual pretendo tratar temas
            de
            arte, naturaleza y salud holística.</p>
        <p>Aquí en mi rincón artístico, te brindo pequeñas guías ilustradas que hablan de autoconocimiento, conexión y
            sanación corporal-emocional, basadas en la naturaleza, el arte, alimentación saludable, ciclicidad femenina,
            herbolaria, técnicas en terapias manuales, meditación, armonización con cristales… todas ellas inspiradas en
            los
            saberes ancestrales.</p>

        <p>El aspecto más importante del proyecto y también de mi vida, es la relación y equilibrio entre
            “Mente-cuerpo-Alma”. Este concepto, ahora muy conocido, abre canales que propician procesos de consciencia y
            sanación, y por ello es mi inspiración, un elemento clave en mi desarrollo personal y viaje espiritual.</p>
        <hr>
        <p>En el espacio <strong><a href="{{route("posts.index")}}">Blog</a></strong> encontraras información útil y
            <strong><a href="{{route("books.index")}}">Recursos gratuitos</a></strong> que
            voy creando para ti, regalos que van
            transformándose a medida que exploro y expando mis conocimientos.</p>
        <p>Espero que resuene contigo aquello que encuentres y sirva para ir De vuelta a ti. </p>
        <p>Una vez más, gracias.</p>
        <footer class="call_to_action">
            {{--Repetido en posts.index--}}
            <form>
                <fieldset>
                    <legend>Si te apetece recibir contenido para trabajar con y para ti misma suscríbete de forma
                        gratuita
                    </legend>
                    <label for="mail_newsletter">algo</label>
                    <input name="mail_newsletter" id="mail_newsletter"
                           placeholder="Introduce tu dirección de correo electrónico">
                    <button type="submit" class="btn">
                        Suscríbete
                    </button>
                </fieldset>
            </form>
        </footer>
    </article>
@endsection
{{--

--}}
