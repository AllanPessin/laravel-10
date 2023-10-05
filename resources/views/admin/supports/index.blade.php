<h1>Listagem de Suportes</h1>

<a href="{{ route('supports.create') }}">Criar Dúvida</a>

<table>
  <thead>
    <th>Assunto</th>
    <th>Status</th>
    <th>Descrição</th>
  </thead>
  <tbody>
    @foreach ($supports as $support)
      <tr>
        <td>{{ $upport->subject }}</td>
        <td>{{ $support->status }}</td>
        <td>{{ $support->body }}</td>
        <td>
          >
        </td>
      </tr>
    @endforeach
  </tbody>
</table>