

<?php $__env->startSection('title', 'Modifier Profession'); ?>

<?php $__env->startSection('content'); ?>

<style>
    .edit-container {
        max-width: 600px;
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

    <h1>Modifier la Profession</h1>

    <form action="<?php echo e(route('admin.professions.update', $profession->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

        <div class="form-group">
            <label>Nom de la profession :</label>
            <input type="text" name="nom" value="<?php echo e($profession->nom); ?>" required class="form-control">
        </div>

        <div class="form-group">
            <label>Description :</label>
            <textarea name="description" class="form-control" rows="4"><?php echo e($profession->description); ?></textarea>
        </div>

        <button type="submit" class="btn-save">💾 Enregistrer les modifications</button>
    </form>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\artisan\resources\views/admin/professions_edit.blade.php ENDPATH**/ ?>