<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Envoyer un devis</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body { background:#f4f6f9; font-family:Arial; padding:20px; }
        .box { max-width:600px; margin:auto; background:white; padding:20px; border-radius:10px; }
        input, textarea { width:100%; padding:8px; margin-top:8px; border-radius:6px; border:1px solid #ccc; }
        button { background:#030f27; color:white; padding:10px 20px; border:none; border-radius:8px; margin-top:15px; }
        button:hover { background:#fdbe33; color:#030f27; }
        label { font-weight:bold; margin-top:10px; display:block; }
    </style>
</head>
<body>
<div class="box">
    <h2>Envoyer un devis</h2>

    <form method="POST" action="{{ route('devis.store', $conversation->id) }}">
        @csrf

        <label>Montant ($)</label>
        <input type="number" step="0.01" name="montant" required>

        <label>Description</label>
        <textarea name="description" rows="4" required></textarea>

        <button type="submit">Envoyer le devis</button>
    </form>
</div>
</body>
</html>
