<!-- resources/views/Cost.blade.php -->

<h1>Lista de Custos</h1>

<ul>
    @foreach($costs as $cost)
        <li>
            <strong>ID do Produto:</strong> {{ $cost->product_id }}<br>
            <strong>Valor do Custo:</strong> {{ $cost->cost_value }}<br>
            <strong>Data:</strong> {{ $cost->date }}
        </li>
    @endforeach
</ul>
