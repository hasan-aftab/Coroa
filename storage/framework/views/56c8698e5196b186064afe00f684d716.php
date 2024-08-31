<?php $__env->startSection('title', 'Coroa Bet - Multiplique seu deposito em 10x! Deposite R$ 50 e ganhe R$ 500.'); ?>

<?php $__env->startSection('seo'); ?>
    <link rel="canonical" href="<?php echo e(url()->current()); ?>" />
    <meta name="description" content="Bem-vindo à Coroa Bet - o melhor cassino online com uma ampla seleção de jogos e uma experiência de aposta fácil e divertida.">
    <meta name="keywords" content="Coroa Bet, cassino online, jogos de slot, apostas em futebol, Fortune Tiger, Fortune OX">

    <meta property="og:locale" content="pt_BR" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Coroa Bet - Multiplique seu deposito em 10x! Deposite R$ 50 e ganhe R$ 500." />
    <meta property="og:description" content="Bem-vindo à Coroa Bet - o melhor cassino online com uma ampla seleção de jogos e uma experiência de aposta fácil e divertida." />
    <meta property="og:url" content="<?php echo e(url()->current()); ?>" />
    <meta property="og:site_name" content="Coroa Bet - Multiplique seu deposito em 10x! Deposite R$ 50 e ganhe R$ 500." />
    <meta property="og:image" content="<?php echo e(asset('/assets/images/banner-principal-1.png')); ?>" />
    <meta property="og:image:secure_url" content="<?php echo e(asset('/assets/images/banner-principal-1.png')); ?>" />
    <meta property="og:image:width" content="1024" />
    <meta property="og:image:height" content="571" />

    <meta name="twitter:title" content="Coroa Bet - Multiplique seu deposito em 10x! Deposite R$ 50 e ganhe R$ 500.">
    <meta name="twitter:description" content="Bem-vindo à Coroa Bet - o melhor cassino online com uma ampla seleção de jogos e uma experiência de aposta fácil e divertida.">
    <meta name="twitter:image" content="<?php echo e(asset('/assets/images/banner-principal-1.png')); ?>"> <!-- Substitua pelo link da imagem que deseja exibir -->
    <meta name="twitter:url" content="<?php echo e(url('/')); ?>"> <!-- Substitua pelo link da sua página -->
<?php $__env->stopSection(); ?>

<?php $__env->startPush('styles'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/splide-core.min.css')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <?php echo $__env->make('includes.new-navbar_left', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="page__content">
            <?php echo $__env->make('includes.new-navbar_top', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <section class="modelo-destaque-jogos">

                <section id="image-carousel" class="splide" aria-label="">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide">
                                <a href="<?php echo e(url('/vgames/exclusive/fortunetiger')); ?>">
                                    <img src="<?php echo e(asset('assets/images/banner-principal-1.png')); ?>" alt="">
                                </a>
                            </li>
                            <li class="splide__slide">
                                <a href="<?php echo e(url('/vgames/exclusive/fortunetiger')); ?>">
                                    <img src="<?php echo e(asset('assets/images/banner-principal-2.png')); ?>" alt="">
                                </a>
                            </li>
                            <li class="splide__slide">
                                <a href="">
                                    <img src="<?php echo e(asset('/assets/images/banner-principal-3.png')); ?>" alt="">
                                </a>
                            </li>
                        </ul>
                    </div>
                </section>

                <?php if(count($gamesExclusives) > 0): ?>
                    <div class="mt-5">
                        <?php echo $__env->make('includes.title', ['link' => url('/games?tab=exclusives'), 'title' => 'Jogos da Casa', 'icon' => 'fa-regular fa-gamepad-modern'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>

                    <div class="d-steam-cards js-steamCards">
                        <?php $__currentLoopData = $gamesExclusives; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gamee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a href="<?php echo e(route('web.vgames.show', ['game' => $gamee->uuid])); ?>" class="d-steam-card-wrapper">
                                <div class="d-steam-card js-steamCard" style="background-image: url('storage/<?php echo e($gamee->cover); ?>')"></div>
                            </a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                <?php endif; ?>

                

                <?php if(count($gamesPopulars) > 0): ?>
                    <?php echo $__env->make('includes.title', ['link' => url('/games?tab=popular'), 'title' => 'Populares', 'icon' => 'fa-duotone fa-stars'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                    <div class="row mt-3">
                        <?php $__currentLoopData = $gamesPopulars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gamep): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-xl-2 col-lg-3 col-md-3 col-sm-6 caixa-loop-elementos">
                                <a href="<?php echo e(route('web.vgames.show', ['game' => $gamep->uuid])); ?>" class="inner-loop-elementos">
                                    <img src="<?php echo e(asset('storage/'.$gamep->image)); ?>" alt="<?php echo e($gamep->name); ?>" class="img-fluid rounded-3">
                                </a>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                <?php endif; ?>

                <?php if(count($games) > 0): ?>
                    <?php echo $__env->make('includes.title', ['link' => url('/games?tab=all'), 'title' => 'Todos os Jogos', 'icon' => 'fa-duotone fa-gamepad-modern'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                    <div class="row mt-3">
                        <?php $__currentLoopData = $games; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $game): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-xl-2 col-lg-3 col-md-3 col-sm-6 caixa-loop-elementos">
                                <a href="<?php echo e(route('web.game.index', ['slug' => $game->slug])); ?>" class="inner-loop-elementos">
                                    <img src="<?php echo e(asset('storage/'.$game->image)); ?>" alt="<?php echo e($game->name); ?>" class="img-fluid rounded-3">
                                </a>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                <?php endif; ?>
            </section>

            <div class="mt-5">
                <?php echo $__env->make('includes.title', ['link' => url('painel/affiliates'), 'title' => 'Afiliados', 'icon' => 'fa-light fa-face-tongue-money', 'labelLink' => 'Menu'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>

            <section class="affiliate-block">
                <div class="affiliate-block-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <img src="<?php echo e(asset('/assets/images/business_afiliado.png')); ?>" alt="" class="img-fluid">
                        </div>
                        <div class="col-lg-8">
                            <div class="affiliate-info my-3">
                                <h1>SAIBA MAIS SOBRE NOSSO <span>PROGRAMA DE AFILIADOS</span></h1>
                                <p>
                                    Trabalhe conosco como afiliado e obtenha lucros significativos por meio de suas indicações.
                                    Oferecemos condições especiais exclusivas para nossos afiliados.
                                </p>
                                <form action="<?php echo e(route('panel.affiliates.join')); ?>" method="post">
                                    <?php echo csrf_field(); ?>
                                    <div class="input-group mb-3 mt-3">
                                        <input type="text" name="email" class="form-control" placeholder="Digite seu email" aria-label="Seu e-mail" aria-describedby="affiliate-mail">
                                        <button type="submit" class="input-group-text" id="affiliate-mail"><span class="mx-2">Enviar agora</span> <i class="fa-solid fa-envelope"></i></button>
                                    </div>
                                </form>


                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <div class="mt-5">
                <?php echo $__env->make('includes.title', ['link' => url('como-funciona'), 'title' => 'F.A.Q', 'icon' => 'fa-light fa-circle-info', 'labelLink' => 'Saiba mais'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>

            <?php echo $__env->make('web.home.sections.faq', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <?php echo $__env->make('includes.new-footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <script src="<?php echo e(asset('assets/js/splide.min.js')); ?>"></script>
    <script>
        document.addEventListener( 'DOMContentLoaded', function () {
            var elemento = document.getElementById('splide-soccer');

            if (elemento) {
                new Splide( '#splide-soccer', {
                    type   : 'loop',
                    drag   : 'free',
                    focus  : 'center',
                    autoplay: 'play',
                    perPage: 3,
                    arrows: false,
                    pagination: false,
                    breakpoints: {
                        640: {
                            perPage: 1,
                        },
                    },
                    autoScroll: {
                        speed: 1,
                    },
                }).mount();
            }

            new Splide( '#image-carousel', {
                arrows: false,
                pagination: false,
                type    : 'loop',
                autoplay: 'play',
            }).mount();
        } );
    </script>
<?php $__env->stopPush(); ?>


<?php echo $__env->make('layouts.new-web', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/hasan/Desktop/real pro/coroabet/resources/views/new-index.blade.php ENDPATH**/ ?>