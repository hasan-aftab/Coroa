<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title'); ?></title>

    <!-- SEO -->
    <?php echo $__env->yieldContent('seo'); ?>

    <meta name="robots" content="index, follow">
    <meta name="Version" content="v1.0.0" />
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <!-- favicon -->
    <link rel="icon" href="<?php echo e(asset('assets/images/favicon.png')); ?>" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo e(asset('assets/images/favicon.png')); ?>" type="image/x-icon">

    <!-- Bootstrap -->
    <link href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>" rel="stylesheet" type="text/css" />

    <!-- iziModal -->
    <link href="<?php echo e(asset('assets/css/iziModal.min.css')); ?>" rel="stylesheet" type="text/css" />

    <link href="<?php echo e(asset('assets/css/iziToast.min.css')); ?>" rel="stylesheet" type="text/css" />

    <!-- Fontawesome -->
    <link href="<?php echo e(asset('assets/css/fontawesome.min.css')); ?>" rel="stylesheet" type="text/css" />

    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;1,100;1,200;1,300;1,400;1,500&family=Catamaran:wght@100;200;300;400;500;600;700;800;900&family=Montserrat:wght@100;200;300;400;500&family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
    <!-- Main Css -->
    <link href="<?php echo e(asset('assets/css/style.css')); ?>" rel="stylesheet" type="text/css" id="theme-opt" />

    <?php echo $__env->yieldPushContent('styles'); ?>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-');
    </script>
    <!-- Meta Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window, document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '869183498295715');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
                   src="https://www.facebook.com/tr?id=869183498295715&ev=PageView&noscript=1"
        /></noscript>
    <!-- End Meta Pixel Code -->

</head>

<body>
<?php if(!in_array(request()->route()->getName(), ['web.vgames.show', 'web.bets.show'])): ?>
    <div class="banner-top">
        <p>Multiplique seu deposito em 10x! Deposite R$ 50 e ganhe R$ 500.</p>
    </div>

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
            var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
            s1.async=true;
            s1.src='https://embed.tawk.to';
            s1.charset='UTF-8';
            s1.setAttribute('crossorigin','*');
            s0.parentNode.insertBefore(s1,s0);
        })();
    </script>
    <!--End of Tawk.to Script-->
<?php endif; ?>

<main class="page">
    <?php echo $__env->yieldContent('content'); ?>
</main>


<!-- javascript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="<?php echo e(asset('assets/js/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/iziModal.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/iziToast.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/custom.js')); ?>"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>

<?php echo $__env->yieldPushContent('scripts'); ?>
<?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.flash','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('flash'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
</body>
</html>
<?php /**PATH /home/hasan/Desktop/real pro/coroabet/resources/views/layouts/new-web.blade.php ENDPATH**/ ?>