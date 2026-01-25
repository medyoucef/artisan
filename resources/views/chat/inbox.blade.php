<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Mes messages</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        body { background:#f4f6f9; font-family:Arial; padding:20px; }
        .box { max-width:800px; margin:auto; background:white; padding:20px; border-radius:10px; }
        .item { padding:15px; border-bottom:1px solid #ddd; }
        .item:hover { background:#fafafa; }
        a { text-decoration:none; color:#030f27; font-weight:bold; }
    </style>
</head>

<body>

<div class="box">
    <h2 style="color:#030f27">Messages reçus</h2>

    @forelse($conversations as $conv)
        <div class="item">
            <p>
                <strong>Utilisateur :</strong> {{ $conv->user->name }}
            </p>
            <a href="{{ route('chat.show', $conv->id) }}">
                Ouvrir la conversation →
            </a>
        </div>
    @empty
        <p>Aucun message pour le moment.</p>
    @endforelse
</div>

</body>
</html>
