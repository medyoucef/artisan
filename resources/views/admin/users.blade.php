@extends('admin.layout')

@section('title', 'Liste des Utilisateurs')

@section('content')

<h1>Liste des Utilisateurs</h1>

<div class="table-container">
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom complet</th>
                <th>Email</th>
                <th>Rôle</th>
                <th>Date d'inscription</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->type_user ?? 'Utilisateur' }}</td>
                <td>{{ $user->created_at->format('d/m/Y') }}</td>
                <td class="action-buttons">

    <a href="{{ route('admin.users.edit', $user->id) }}">
        <button class="btn-edit">Modifier</button>
    </a>

    <form action="{{ route('admin.users.delete', $user->id) }}" method="POST" onsubmit="return confirm('Supprimer cet utilisateur ?');">
        @csrf
        @method('DELETE')
        <button class="btn-delete">Supprimer</button>
    </form>

</td>

            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
