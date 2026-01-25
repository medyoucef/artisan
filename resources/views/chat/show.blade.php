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
        button { background:#030f27; color:white; padding:10px 20px; border:none; border-radius:8px; margin-top:10px; }
        button:hover { background:#fdbe33; color:#030f27; }
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

    <form method="POST" action="{{ route('chat.send', $conversation->id) }}">
        @csrf
        <textarea name="message" rows="3" required></textarea>
        <button type="submit">Envoyer</button>
    </form>
</div>

</body>
</html>
