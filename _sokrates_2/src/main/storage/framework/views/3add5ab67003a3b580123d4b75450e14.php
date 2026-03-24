<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $__env->yieldContent('title', 'Admin'); ?></title>

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

        /* Table styling */
        .table-container {
            margin-top: 20px;
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
            border-radius: 10px;
            overflow: hidden;
        }

        thead {
            background: var(--primary);
            color: white;
        }

        th, td {
            padding: 12px 15px;
            border-bottom: 1px solid #ddd;
        }

        tr:hover {
            background: #f1f1f1;
        }

        .btn-edit {
            background: #4CAF50;
            color: white;
            padding: 6px 10px;
            border: none;
            border-radius: 5px;
        }

        .btn-delete {
            background: #e63946;
            color: white;
            padding: 6px 10px;
            border: none;
            border-radius: 5px;
        }

        .action-buttons {
    display: flex;
    gap: 10px; /* espace entre les boutons */
    align-items: center;
}
.action-buttons form {
    margin: 0; /* retire le margin par défaut */
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

        .btn-add {
    background: var(--accent);
    color: var(--primary);
    padding: 12px 20px;
    border-radius: 8px;
    font-weight: bold;
    text-decoration: none;
    font-size: 15px;
    box-shadow: 0 3px 6px rgba(0,0,0,0.15);
    transition: 0.2s;
    display: inline-block;
}

.btn-add:hover {
    background: #e0a800;
    transform: translateY(-2px);
}

    </style>
</head>

<body>

    <div class="sidebar">
        <h2>Admin</h2>
        <a href="<?php echo e(route('admin.dashboard')); ?>">Dashboard</a>
        <a href="<?php echo e(route('admin.artisans')); ?>">Artisans</a>
        <a href="<?php echo e(route('admin.societes')); ?>">Sociétés</a>
<a href="<?php echo e(route('admin.users')); ?>">Utilisateurs</a>
<a href="<?php echo e(route('admin.messages')); ?>">Messages</a>
<a href="<?php echo e(route('admin.professions')); ?>">Professions</a>
<a href="#">Avis</a>
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
        <?php echo $__env->yieldContent('content'); ?>
    </div>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\artisan\resources\views/admin/layout.blade.php ENDPATH**/ ?>