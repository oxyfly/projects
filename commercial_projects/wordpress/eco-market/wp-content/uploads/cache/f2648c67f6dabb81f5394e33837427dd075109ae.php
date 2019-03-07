<?php $__env->startSection('content'); ?>
    <?php while(have_posts()): ?> <?php the_post() ?>
    <nav aria-label="breadcrumb" class="breadcrumbs">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="/">Главная</a></li>
            <li class="breadcrumb-item"><a href="/catalog">Мёд</a></li>
        </ol>
    </nav>
    <?php echo $__env->make('partials.content-page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <div class="container honey-pot-description-container">
        <div class="row">



        </div>
    </div>

    <?php endwhile; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>