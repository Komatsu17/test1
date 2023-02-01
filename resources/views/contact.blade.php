@extends('layout.app')

@section('content')
    <section class="center">
        <div class="contactIntro">
            <h1>Entre em Contato</h1>
            <form action="/contact" method="POST">
                @csrf
                <input name="first_name" type="text" placeholder="Nome">
                @error('first_name')
                    <p class="text-red-600">{{ $message }}</p>
                @enderror
                <input name="last_name" type="text" placeholder="Sobrenome">
                @error('last_name')
                    <p class="text-red-600">{{ $message }}</p>
                @enderror
                <input name="email" type="email" placeholder="Email">
                @error('email')
                    <p class="text-red-600">{{ $message }}</p>
                @enderror
                <textarea name="content" placeholder="Mensagem"></textarea>
                @error('content')
                    <p class="text-red-600">{{ $message }}</p>
                @enderror
                <input type="submit" value="Enviar">
            </form>
        </div>
    </section>
@endsection
