

<?php $__env->startSection('title', 'Modifier Artisan'); ?>

<?php $__env->startSection('content'); ?>

<style>
    .edit-container {
        max-width: 650px;
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
</style>

<div class="edit-container">

    <h1>Modifier l’Artisan</h1>

    <form action="<?php echo e(route('admin.artisans.update', $artisan->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

        <div class="form-group">
            <label>Nom :</label>
            <input type="text" name="nom" value="<?php echo e($artisan->nom); ?>" required class="form-control">
        </div>

        <div class="form-group">
            <label>Email :</label>
            <input type="email" name="email" value="<?php echo e($artisan->email); ?>" required class="form-control">
        </div>

        <div class="form-group">
            <label>Téléphone :</label>
            <input type="text" name="telephone" value="<?php echo e($artisan->telephone); ?>" class="form-control">
        </div>

        <div class="form-group">
            <label>Adresse :</label>
            <input type="text" name="adresse" value="<?php echo e($artisan->adresse); ?>" class="form-control">
        </div>

        <div class="form-group">
            <label>Profession :</label>
            <input type="text" name="profession" value="<?php echo e($artisan->profession); ?>" class="form-control">
        </div>

        <button type="submit" class="btn-save">💾 Enregistrer les modifications</button>
    </form>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\artisan\resources\views/admin/artisans_edit.blade.php ENDPATH**/ ?>