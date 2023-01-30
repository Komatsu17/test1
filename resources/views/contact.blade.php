@extends('layout.app')

@section('content')
    <section class="center">
        <div class="contactIntro">
            <h1>Entre em Contato</h1>
            <form action="/contact" method="POST">
                @csrf
                <input name="first_name" type="text" placeholder="Nome">
                <input name="last_name" type="text" placeholder="Sobrenome">
                <input name="email" type="email" placeholder="Email">
                <textarea name="content" placeholder="Mensagem"></textarea>
                <input type="submit" value="Enviar">
            </form>
        </div>
    </section>
@endsection
