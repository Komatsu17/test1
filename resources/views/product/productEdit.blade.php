@extends('layout.app')

@section('content') 
    <section class="center">
        <div>
            <h1>Editar Produto</h1>
            <form action="{{ route('product.update', $product) }}" method="POST">
                @csrf
                @method('PUT')
                <input name="name" type="text" placeholder="Nome" value="{{ $product->name }}">
                @error('name')
                    <p class="text-red-600">{{ $message }}</p>
                @enderror
                <input name="price" type="text" placeholder="Preco" value="{{ $product->price }}">
                @error('price')
                <p class="text-red-600">{{ $message }}</p>
                @enderror
                <input name="currency" type="text" placeholder="Moeda" value="{{ $product->currency }}">
                @error('currency')
                <p class="text-red-600">{{ $message }}</p>
                @enderror
                <input name="quantity" type="text" placeholder="Quantidade" value="{{ $product->quantity }}">
                @error('quantity')
                <p class="text-red-600">{{ $message }}</p>
                @enderror
                <button type="submit">Salvar</button>
            </form>
        </div>
    </section>
@endsection