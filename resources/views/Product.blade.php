<!-- resources/views/Product.blade.php -->

<h1>Lista de Produtos</h1>

<ul>
    @foreach($products as $product)
        <li>
            <strong>{{ $product->name }}</strong><br>
            {{ $product->description }}
            <br>
            <a href="{{ route('products.show', $product->id) }}">Detalhes</a>
        </li>
    @endforeach
</ul>
