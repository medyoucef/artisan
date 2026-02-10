@extends('admin.layout')

@section('title', 'Ajouter une Société')

@section('content')

<style>
    .edit-container {
        max-width: 700px;
        margin: 0 auto;
        background: white;
        padding: 25px;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        border-left: 6px solid var(--accent);
    }

    .edit-container h1 {
        margin-bottom: 20px;
        font-size: 26px;
        color: var(--primary);
        text-align: center;
    }

    .form-group {
        margin-bottom: 18px;
    }

    .form-group label {
        font-weight: bold;
        color: var(--primary);
        display: block;
        margin-bottom: 6px;
    }

    .form-control {
        width: 100%;
        padding: 12px;
        border-radius: 8px;
        border: 1px solid #ccc;
        font-size: 15px;
        transition: 0.2s;
    }

    .form-control:focus {
        border-color: var(--accent);
        box-shadow: 0 0 4px rgba(253,190,51,0.6);
        outline: none;
    }

    .btn-save {
        background: var(--accent);
        color: var(--primary);
        padding: 12px 20px;
        border: none;
        border-radius: 8px;
        font-size: 16px;
        font-weight: bold;
        cursor: pointer;
        width: 100%;
        transition: 0.2s;
    }

    .btn-save:hover {
        background: #e0a800;
    }

    .btn-cancel {
        display: block;
        text-align: center;
        margin-top: 12px;
        color: var(--primary);
        font-weight: bold;
        text-decoration: none;
    }
</style>

<div class="edit-container">

    <h1>Ajouter une Société</h1>

    <form action="{{ route('admin.societes.store') }}" 
          method="POST" 
          enctype="multipart/form-data">

        @csrf

        <div class="form-group">
            <label>Nom de la société *</label>
            <input type="text" name="name" required class="form-control">
        </div>

        <div class="form-group">
            <label>Description :</label>
            <textarea name="description" class="form-control" rows="4"></textarea>
        </div>

        <div class="form-group">
            <label>Photo :</label>
            <input type="file" name="photo" class="form-control">
        </div>

        <button type="submit" class="btn-save">➕ Ajouter la Société</button>

        <a href="{{ route('admin.societes') }}" class="btn-cancel">
            Annuler
        </a>

    </form>

</div>

@endsection
