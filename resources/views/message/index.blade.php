@extends('layout.app')

@section('content')
    @foreach ($message as $message)
        <div>
            <div>
                {{ $message->first_name }}
            </div>
            <div>
                {{ $message->last_name }}
            </div>
            <div>
                {{ $message->email }}
            </div>
            <div>
                {{ $message->content }}
            </div>
            <form action="{{ route('message.destroy', $message) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Deletar</button>
            </form>
            <form action="{{ route('message.edit', $message) }}" method="POST">
                @csrf
                <button type="submit">Editar</button>
            </form>
            <hr />
        </div>
    @endforeach
@endsection