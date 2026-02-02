@extends('admin.layout')

@section('title', 'Liste des Professions')

@section('content')

<h1>Liste des Professions</h1>

<div class="table-container">
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom de la profession</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
            @foreach($professions as $profession)
            <tr>
                <td>{{ $profession->id }}</td>
                <td>{{ $profession->name }}</td>
                <td>{{ $profession->description ?? '—' }}</td>
                <td class="action-buttons">

    <a href="{{ route('admin.professions.edit', $profession->id) }}">
        <button class="btn-edit">Modifier</button>
    </a>

    <form action="{{ route('admin.professions.delete', $profession->id) }}" method="POST" onsubmit="return confirm('Supprimer cette profession ?');">
        @csrf
        @method('DELETE')
        <button class="btn-delete">Supprimer</button>
    </form>

</td>

            </tr>
            @endforeach
        </tbody>
    </table>
    <div style="margin-bottom: 20px; text-align: right;">
    <a href="{{ route('admin.professions.create') }}" class="btn-add">
    ➕ Ajouter une Profession
</a>

</div>

</div>

@endsection
