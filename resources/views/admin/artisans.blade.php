@extends('admin.layout')

@section('content')
<h1>Liste des Artisans</h1>

<div class="table-container">
    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Profession</th>
                <th>Téléphone</th>
                <th>Ville</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            @foreach($artisans as $artisan)
            <tr>
                <td>{{ $artisan->nom }}</td>
                <td>{{ $artisan->profession }}</td>
                <td>{{ $artisan->telephone }}</td>
                <td>{{ $artisan->ville }}</td>
                <td class="action-buttons">

                    <a href="{{ route('admin.artisans.edit', $artisan->id) }}">
                        <button class="btn-edit">Modifier</button>
                    </a>

                    <form action="{{ route('admin.artisans.delete', $artisan->id) }}" method="POST" onsubmit="return confirm('Supprimer cet artisan ?');">
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
    <a href="{{ route('admin.artisans.create') }}" class="btn-add">
        ➕ Ajouter un Artisan
    </a>
</div>

</div>
@endsection
