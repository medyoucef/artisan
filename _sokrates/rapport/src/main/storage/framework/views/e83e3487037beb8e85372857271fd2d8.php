<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Admin</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        :root {
            --primary: #030f27;
            --accent: #fdbe33;
            --light: #ffffff;
            --bg: #f4f6f9;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: var(--bg);
        }

        /* Sidebar */
        .sidebar {
            width: 250px;
            height: 100vh;
            background: var(--primary);
            color: var(--light);
            position: fixed;
            padding-top: 20px;
            transition: 0.3s;
        }

        .sidebar h2 {
            text-align: center;
            margin-bottom: 30px;
            color: var(--accent);
        }

        .sidebar a {
            display: block;
            padding: 15px 20px;
            color: var(--light);
            text-decoration: none;
            font-size: 16px;
        }

        .sidebar a:hover {
            background: var(--accent);
            color: var(--primary);
        }

        /* Content */
        .content {
            margin-left: 250px;
            padding: 30px;
        }

        h1 {
            color: var(--primary);
        }

        /* Cards */
        .card-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }

        .card {
            background: var(--light);
            padding: 20px;
            border-radius: 10px;
            border-left: 6px solid var(--accent);
            box-shadow: 0 2px 6px rgba(0,0,0,0.1);
            transition: 0.2s;
        }

        .card:hover {
            transform: translateY(-4px);
        }

        .card h3 {
            margin: 0;
            color: var(--primary);
        }

        .card p {
            font-size: 28px;
            margin-top: 10px;
            color: var(--accent);
        }

        /* Responsive sidebar */
        @media (max-width: 768px) {
            .sidebar {
                width: 200px;
            }
            .content {
                margin-left: 200px;
            }
        }

        @media (max-width: 600px) {
            .sidebar {
                position: relative;
                width: 100%;
                height: auto;
            }
            .content {
                margin-left: 0;
            }
        }
    </style>
</head>

<body>

    <div class="sidebar">
        <h2>Admin</h2>
        <a href="#">Dashboard</a>
        <a href="<?php echo e(route('admin.artisans')); ?>">Artisans</a>
        <a href="<?php echo e(route('admin.societes')); ?>">Sociétés</a>
        <a href="<?php echo e(route('admin.users')); ?>">Utilisateurs</a>
        <a href="<?php echo e(route('admin.messages')); ?>">Messages</a>
        <a href="<?php echo e(route('admin.professions')); ?>">Professions</a>
        <a href="<?php echo e(route('admin.devis')); ?>">Devis</a>
        <a href="#">Paramètres</a>

<a href="#" 
   onclick="event.preventDefault(); document.getElementById('logout-form-admin').submit();">
    Déconnexion
</a>

<form id="logout-form-admin" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
    <?php echo csrf_field(); ?>
</form>

    </div>

    <div class="content">
        <h1>Dashboard Administrateur</h1>

        <div class="card-grid">

            <a href="<?php echo e(route('admin.artisans')); ?>">
            <div class="card">
                <h3>Artisans</h3>
                <p><?php echo e($artisans); ?></p>
            </div>
            </a>

            <a href="<?php echo e(route('admin.societes')); ?>">
            <div class="card">
                <h3>Sociétés</h3>
                <p><?php echo e($societes); ?></p>
            </div>
            </a>

            <a href="<?php echo e(route('admin.users')); ?>">
            <div class="card">
                <h3>Utilisateurs</h3>
                <p><?php echo e($users); ?></p>
            </div>
            </a>

            <a href="<?php echo e(route('admin.messages')); ?>">
            <div class="card">
                <h3>Messages reçus</h3>
                <p><?php echo e($messages ?? 0); ?></p>
            </div>

            </a>

            <a href="<?php echo e(route('admin.professions')); ?>">
            <div class="card">
                <h3>Profession</h3>
                <p><?php echo e($categories ?? 0); ?></p>
            </div>
            </a>

            <a href="<?php echo e(route('admin.devis')); ?>">
    <div class="card">
        <h3>Devis</h3>
        <p><?php echo e($devis ?? 0); ?></p>
    </div>
</a>


            

        </div>
    </div>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\artisan\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>