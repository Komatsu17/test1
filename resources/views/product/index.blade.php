@extends('layout.app')

@section('content')
    @foreach ($products as $product)
        <div class="center">
            <h1>Produtos</h1>
            <div class="w50 left">
                <div>
                    {{ $product->name }}
                </div>
                <div>
                    {{ $product->price }}
                </div>
                <div>
                    {{ $product->quantity }}
                </div>
            </div>
            <form class="w50 right" action="{{ route('product.edit', $product) }}" method="GET">
                @csrf
                <button type="submit">Editar</button>
            </form>
            <form class="w50 right" action="{{ route('product.destroy', $product) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Excluir</button>
            </form>
        </div>    
        <div class="clear"></div>
    @endforeach
@endsection