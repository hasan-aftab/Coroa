<?php $__env->startSection('title', $game->name . ' - Cassino Online | Jogos de Slot e Apostas em Futebol'); ?>

<?php $__env->startSection('seo'); ?>
    <link rel="canonical" href="<?php echo e(url()->current()); ?>" />
    <meta name="description" content="<?php echo e($game->description); ?>">
    <meta name="keywords" content="Apostas esportivas, Apostas em futebol, Prognósticos de futebol, Dicas de apostas, Odds de futebol, Melhores sites de apostas, Liga de futebol, Campeonato de futebol, Apostas ao vivo, Futebol online, Apostas em tempo real, Estratégias de apostas, Apostas esportivas online, Bônus de apostas, Sites de apostas confiáveis, Guia de apostas esportivas, Melhores apostas do dia, Mercados de apostas, Futebol internacional, Aposta acumulada">

    <meta property="og:locale" content="pt_BR" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php echo e($game->name); ?>" />
    <meta property="og:description" content="Bem-vindo à SPCASSINO - o melhor cassino online com uma ampla seleção de jogos de slot, apostas em jogos de futebol e uma experiência de aposta fácil e divertida. Jogue Fortune Tiger, Fortune OX e muito mais!" />
    <meta property="og:url" content="<?php echo e(url()->current()); ?>" />

    <meta property="og:site_name" content="<?php echo e($game->name . ' - Cassino Online | Jogos de Slot e Apostas em Futebol'); ?>" />
    <meta property="og:image" content="<?php echo e(asset('/storage/' . $game->cover)); ?>" />
    <meta property="og:image:secure_url" content="<?php echo e(asset('/storage/' . $game->cover)); ?>" />
    <meta property="og:image:width" content="1024" />
    <meta property="og:image:height" content="571" />

    <meta name="twitter:title" content="<?php echo e($game->name); ?>">
    <meta name="twitter:description" content="<?php echo e($game->description); ?>">
    <meta name="twitter:image" content="<?php echo e(asset('/storage/' . $game->cover)); ?>"> <!-- Substitua pelo link da imagem que deseja exibir -->
    <meta name="twitter:url" content="<?php echo e(url('/')); ?>"> <!-- Substitua pelo link da sua página -->
<?php $__env->stopSection(); ?>

<?php $__env->startPush('styles'); ?>

<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <div class="playgame">
        <div class="playgame-body">
            <iframe src="<?php echo e($gameUrl); ?>/index.html?token=<?php echo e($token); ?>" class="game-full"></iframe>
        </div>
        <div class="action-buttons" style="position: absolute;top: 10px;left: 10px;">
            <a href="<?php echo e(url('/')); ?>" class="w-button btn-small">
                <i class="fa-regular fa-arrow-left mr-3"></i> Fechar
            </a>
        </div>










    </div>

    <?php echo $__env->make('includes.deposit', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <script>

    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.web', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/hasan/Desktop/real pro/coroabet/resources/views/web/vgames/play.blade.php ENDPATH**/ ?>