@extends('layout.app')

@section('content')
    <h1>Editar</h1>
    <form action="{{ route('message.update') }}" method="POST">
        @csrf
        @method('PATCH')
        <input name="first_name" type="text" placeholder="Nome">
        <input name="last_name" type="text" placeholder="Sobrenome">
        <input name="email" type="email" placeholder="Email">
        <textarea name="content" placeholder="Mensagem"></textarea>
        <input type="submit" value="Enviar">
    </form>
@endsection
