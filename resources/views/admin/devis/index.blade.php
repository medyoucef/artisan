<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des devis</title>

    <style>
        body { background:#f4f6f9; font-family:Arial; padding:30px; }
        .container { max-width:1100px; margin:auto; }

        h1 { color:#030f27; margin-bottom:25px; }

        table {
            width:100%;
            border-collapse:collapse;
            background:white;
            border-radius:10px;
            overflow:hidden;
            box-shadow:0 2px 6px rgba(0,0,0,0.1);
        }

        th, td {
            padding:12px 15px;
            border-bottom:1px solid #ddd;
            text-align:left;
        }

        th {
            background:#030f27;
            color:white;
        }

        tr:hover {
            background:#f1f1f1;
        }

        .status {
            padding:6px 12px;
            border-radius:8px;
            font-weight:bold;
        }

        .pending { background:#fdbe33; color:#030f27; }
        .accepted { background:green; color:white; }
        .refused { background:red; color:white; }

        a.btn {
            padding:6px 12px;
            background:#030f27;
            color:white;
            border-radius:6px;
            text-decoration:none;
        }

        a.btn:hover {
            background:#fdbe33;
            color:#030f27;
        }
    </style>
</head>

<body>

<div class="container">
    <h1>Liste des devis</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Artisan</th>
                <th>Client</th>
                <th>Montant</th>
                <th>Statut</th>
                <th>Date</th>
            </tr>
        </thead>

        <tbody>
            @foreach($devis as $d)
                <tr>
                    <td>{{ $d->id }}</td>
                    <td>{{ $d->artisan->name }}</td>
                    <td>{{ $d->client->name }}</td>
                    <td>{{ $d->montant }} €</td>

                    <td>
                        <span class="status
                            @if($d->statut === 'en_attente') pending
                            @elseif($d->statut === 'accepté') accepted
                            @else refused
                            @endif">
                            {{ ucfirst($d->statut) }}
                        </span>
                    </td>

                    <td>{{ $d->created_at->format('d/m/Y') }}</td>

                    
                </tr>
            @endforeach
        </tbody>
    </table>

</div>

</body>
</html>
