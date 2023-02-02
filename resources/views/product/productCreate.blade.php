@extends('layout.app')

@section('content') 
    <section class="center">
        <div>
            <h1>Cadastrar Produto</h1>
            <form action="{{ route('product.store') }}" method="POST">
                @csrf
                <input name="name" type="text" placeholder="Nome">
                @error('name')
                    <p class="text-red-600">{{ $message }}</p>
                @enderror
                <input name="price" type="text" placeholder="Preco">
                @error('price')
                <p class="text-red-600">{{ $message }}</p>
                @enderror
                <input name="quantity" type="text" placeholder="Quantidade">
                @error('quantity')
                <p class="text-red-600">{{ $message }}</p>
                @enderror
                <button type="submit">Salvar</button>
            </form>
        </div>
    </section>
@endsection