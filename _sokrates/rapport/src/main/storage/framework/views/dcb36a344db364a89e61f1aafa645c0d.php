<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Mes devis</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        body { background:#f4f6f9; font-family:Arial; padding:30px; }
        .container { max-width:900px; margin:auto; }
        .title { color:#030f27; margin-bottom:25px; }

        .devis-card {
            background:white;
            border-radius:12px;
            padding:20px;
            margin-bottom:20px;
            border-left:6px solid #030f27;
            box-shadow:0 2px 6px rgba(0,0,0,0.1);
        }

        .devis-header {
            display:flex;
            justify-content:space-between;
            align-items:center;
            margin-bottom:10px;
        }

        .status {
            padding:6px 12px;
            border-radius:8px;
            font-weight:bold;
            font-size:14px;
        }

        .pending { background:#fdbe33; color:#030f27; }
        .accepted { background:green; color:white; }
        .refused { background:red; color:white; }

        .btn-chat {
            display:inline-block;
            margin-top:10px;
            padding:8px 14px;
            background:#030f27;
            color:white;
            border-radius:6px;
            text-decoration:none;
        }
        .btn-chat:hover { background:#fdbe33; color:#030f27; }
    </style>
</head>

<body>

<div class="container">
    <h2 class="title">Mes devis</h2>

    <?php $__empty_1 = true; $__currentLoopData = $devis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <div class="devis-card">

            <div class="devis-header">
                <h3 style="margin:0;">Devis #<?php echo e($d->id); ?></h3>

                <span class="status 
                    <?php if($d->statut === 'en_attente'): ?> pending 
                    <?php elseif($d->statut === 'accepté'): ?> accepted 
                    <?php else: ?> refused 
                    <?php endif; ?>">
                    <?php echo e(ucfirst($d->statut)); ?>

                </span>
            </div>

            <p><strong>Artisan :</strong> <?php echo e($d->artisan->name); ?></p>
            <p><strong>Montant :</strong> <?php echo e($d->montant); ?> €</p>
            <p><strong>Description :</strong> <?php echo e($d->description); ?></p>

            <a href="<?php echo e(route('chat.show', $d->conversation_id)); ?>" class="btn-chat">
                Voir la conversation
            </a>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <p>Aucun devis pour le moment.</p>
    <?php endif; ?>
</div>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\artisan\resources\views/devis/client.blade.php ENDPATH**/ ?>