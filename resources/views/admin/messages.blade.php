@extends('admin.layout')

@section('title', 'Messages reçus')

@section('content')

<h1>Messages reçus</h1>

<div class="table-container">
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Email</th>
                <th>Sujet</th>
                <th>Message</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
            @foreach($messages as $msg)
            <tr>
                <td>{{ $msg->id }}</td>
                <td>{{ $msg->nom }}</td>
                <td>{{ $msg->email }}</td>
                <td>{{ $msg->sujet?? '—' }}</td>
                <td>{{ Str::limit($msg->message, 40) }}</td>
                <td>{{ $msg->created_at ? $msg->created_at->format('d/m/Y H:i') : '—' }}</td>
                <td class="action-buttons">

                    

                    <form action="{{ route('admin.messages.delete', $msg->id) }}" 
                        method="POST" 
                        onsubmit="return confirm('Supprimer cet message ?');">
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
