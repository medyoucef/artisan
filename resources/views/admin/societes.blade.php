@extends('admin.layout')

@section('title', 'Liste des Sociétés')

@section('content')

<h1>Liste des Sociétés</h1>

<div class="table-container">
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom de la société</th>
                <th>Téléphone</th>
                <th>Adresse</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
            @foreach($societes as $societe)
            <tr>
                <td>{{ $societe->id }}</td>
                <td>{{ $societe->name }}</td>
                <td>{{ $societe->telephone }}</td>
                <td>{{ $societe->adresse }}</td>
                <td class="action-buttons">

    <a href="{{ route('admin.societes.edit', $societe->id) }}">
        <button class="btn-edit">Modifier</button>
    </a>

    <form action="{{ route('admin.societes.delete', $societe->id) }}" method="POST" onsubmit="return confirm('Supprimer cette société ?');">
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
    <a href="{{ route('admin.societes.create') }}" class="btn-add">
        ➕ Ajouter une societé
    </a>
</div>
</div>

@endsection
