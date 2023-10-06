<h1>Listagem dos suportes</h1>

<!-- Ao linkar uma nova página, chamamos a rota pelo seu nome -->
<a href="{{ route('supports.create') }}">Nova Dúvida</a>

<table>
    <thead>
        <th>assunto</th>
        <th>status</th>
        <th>descrição</th>
        <th></th>
    </thead>

    <tbody>
        @foreach ($supports as $support)
        <tr>
            <td>{{ $support->subject }}</td>
            <td>{{ $support->status }}</td>
            <td>{{ $support->body }}</td>
            <td>
                <a href="{{ route('supports.show', $support->id) }}">Ir</a>
                <a href="{{ route('supports.edit', $support->id) }}">Editar</a>
            </td>
        </tr>
    
        @endforeach
    </tbody>
</table>