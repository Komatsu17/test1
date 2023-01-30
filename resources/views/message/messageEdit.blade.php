@extends('layout.app')

@section('content')
    <section class="center">
        <div class="contactIntro">
            <h1>Editar Usuario</h1>
            <form action=" {{ route('message.update', $message) }}" method="POST">
                @csrf
                @method('PUT')
                <input class="border rounded p-2" name="first_name" type="text" placeholder="Nome" value="{{ $message->first_name }}">
                @error('first_name')
                    <p class="text-red-600">{{ $message }}</p>
                @enderror
                <input name="last_name" type="text" placeholder="Sobrenome" value="{{ $message->last_name }}">
                <input name="email" type="email" placeholder="Email" value="{{ $message->email }}">
                <textarea name="content" placeholder="Mensagem">{{ $message->content }}</textarea>
                <input type="submit" value="Enviar">
            </form>
        </div>
    </section>
@endsection
