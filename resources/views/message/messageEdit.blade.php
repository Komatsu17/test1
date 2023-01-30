@extends('layout.app')

@section('content')
<section class="center">
    <div class="contactIntro">
        <h1>Editar Usuario</h1>
        <form action=" {{ route('edit') }}" method="POST">
            @csrf
            @method('DELETE')
            <input name="first_name" type="text" placeholder="Nome">
            <input name="last_name" type="text" placeholder="Sobrenome">
            <input name="email" type="email" placeholder="Email">
            <textarea name="content" placeholder="Mensagem"></textarea>
            <input type="submit" value="Enviar">
        </form>
    </div>
</section>
@endsection
