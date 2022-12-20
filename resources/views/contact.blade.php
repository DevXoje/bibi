@extends('template')
@section('title', 'Contacto')

@section('content')
    <article class="contact">
        <header class="contact__header">
            <h1>Contacto</h1>
            <p>
                Si necesitas algo no dudes en ponerte en contacto conmigo mediante Instagram, correo electrónico o
                rellenando
                el formulario de la información de contacto a continuación.
            </p>
            <p>Estaré encantada de contestar y compartir.</p>
        </header>
        <div class="call_to_action">
            <div class="call_to_action__social">
                <h2>Ponte en contacto</h2>
                <a href="mailto:perladalua@gmail.com">perladalua@gmail.com</a>
                <ul class="icon_list">
                    <li>icon1</li>
                    <li>icon2</li>
                </ul>
            </div>
            <form class="call_to_action__form">
                <label for="name">nombre</label>
                <input type="text" name="name" id="name">
                <label for="email">email</label>
                <input type="email" name="email" id="email">
                <label for="message">message</label>
                <textarea name="message" id="message" cols="30" rows="10"></textarea>
                <button type="submit">enviar</button>
            </form>
        </div>
    </article>
@endsection
