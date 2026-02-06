<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Discussion</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        body { background:#f4f6f9; font-family:Arial; padding:20px; }
        .chat-box { max-width:700px; margin:auto; background:white; padding:20px; border-radius:10px; }
        .messages { height:350px; overflow-y:auto; border:1px solid #ddd; padding:10px; border-radius:8px; background:#fafafa; }
        .me { text-align:right; }
        .bubble { padding:8px 12px; border-radius:8px; display:inline-block; max-width:70%; }
        .me .bubble { background:#fdbe33; color:#030f27; }
        .other .bubble { background:#030f27; color:white; }
        textarea { width:100%; border-radius:8px; padding:8px; }
        button { background:#030f27; color:white; padding:10px 20px; border:none; border-radius:8px; margin-top:10px; cursor:pointer; }
        button:hover { background:#fdbe33; color:#030f27; }

        /* Style des devis */
        .devis-box {
            background:white;
            border:1px solid #ddd;
            padding:12px;
            border-radius:8px;
            margin-top:15px;
        }
        .devis-actions button {
            padding:6px 12px;
            border-radius:6px;
            border:none;
            cursor:pointer;
        }
        .accept { background:green; color:white; }
        .refuse { background:red; color:white; }
    </style>
</head>

<body>

<div class="chat-box">
    <h2 style="color:#030f27">Discussion</h2>

    <div class="messages">
        @foreach($messages as $msg)
            <div class="{{ $msg->sender_id == auth()->id() ? 'me' : 'other' }}">
                <div class="bubble">
                    {{ $msg->message }}
                </div>
            </div>
        @endforeach
    </div>

    {{-- Formulaire d’envoi de message --}}
    <form method="POST" action="{{ route('chat.send', $conversation->id) }}">
        @csrf
        <textarea name="message" rows="3" required></textarea>
        <button type="submit">Envoyer</button>
    </form>

    {{-- Bouton visible uniquement pour l'artisan --}}
    @if(auth()->check() && auth()->user()->type_user === 'artisan')
        <form method="GET" action="{{ route('devis.create', $conversation->id) }}">
            <button type="submit" style="background:#fdbe33; color:#030f27; margin-top:15px;">
                Envoyer un devis
            </button>
        </form>
    @endif


    {{-- Affichage des devis liés à la conversation --}}
    @if(isset($devis) && $devis->count())
        <h3 style="margin-top:25px; color:#030f27;">Devis envoyés</h3>

        @foreach($devis as $d)
            <div class="devis-box">
                <p><strong>Montant :</strong> {{ $d->montant }} €</p>
                <p><strong>Description :</strong> {{ $d->description }}</p>
                <p><strong>Statut :</strong> {{ ucfirst($d->statut) }}</p>

                {{-- Boutons acceptation/refus visibles uniquement pour le client --}}
                @if(auth()->id() === $d->client_id && $d->statut === 'en_attente')
                    <div class="devis-actions">
                        <form method="POST" action="{{ route('devis.accepter', $d->id) }}" style="display:inline-block;">
                            @csrf
                            <button class="accept">Accepter</button>
                        </form>

                        <form method="POST" action="{{ route('devis.refuser', $d->id) }}" style="display:inline-block; margin-left:5px;">
                            @csrf
                            <button class="refuse">Refuser</button>
                        </form>
                    </div>
                @endif
            </div>
        @endforeach
    @endif

</div>

</body>
</html>
