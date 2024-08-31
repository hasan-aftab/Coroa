<!DOCTYPE html>
<html data-wf-page="65f63371ce39e674fcad5f54" data-wf-site="65f63371ce39e674fcad5f42">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title'); ?></title>

    <meta content="Webflow" name="generator">

    <!-- SEO -->
    <?php echo $__env->yieldContent('seo'); ?>

    <meta name="robots" content="index, follow">
    <meta name="Version" content="v1.0.0" />
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

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

    <link href="<?php echo e(asset('assets/css/new-design/webflow.css')); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo e(asset('assets/css/new-design/normalize.css')); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo e(asset('assets/css/new-design/coroabet-novo.webflow.css')); ?>" rel="stylesheet" type="text/css">

    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>

    <script type="text/javascript">
        WebFont.load({
            google: {
                families: ["Poppins:100,200,300,regular,500,600,700,800,900"]
            }
        });
    </script>
    <script type="text/javascript">
        ! function(o, c) {
            var n = c.documentElement,
                t = " w-mod-";
            n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n.className += t + "touch")
        }(window, document);
    </script>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-');
    </script>
    <!-- Meta Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '869183498295715');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=869183498295715&ev=PageView&noscript=1" /></noscript>
    <!-- End Meta Pixel Code -->

    <link href="<?php echo e(asset('assets/images/new-design/images/favicon.ico')); ?>" rel="shortcut icon" type="image/x-icon">
    <link href="<?php echo e(asset('assets/images/new-design/images/webclip.png')); ?>" rel="apple-touch-icon">

</head>

<body class="body">

    <?php if(!in_array(request()->route()->getName(), ['web.vgames.show', 'web.bets.show'])): ?>
    <div class="banner-top">

        <div>Multiplique seu deposito em 10x! Deposite R$ 50 e ganhe R$ 500.</div>

        <!--Start of Tawk.to Script-->
        <script type="text/javascript">
            var Tawk_API = Tawk_API || {},
                Tawk_LoadStart = new Date();
            (function() {
                var s1 = document.createElement("script"),
                    s0 = document.getElementsByTagName("script")[0];
                s1.async = true;
                s1.src = 'https://embed.tawk.to';
                s1.charset = 'UTF-8';
                s1.setAttribute('crossorigin', '*');
                s0.parentNode.insertBefore(s1, s0);
            })();
        </script>
        <!--End of Tawk.to Script-->

        <?php if(auth()->user()): ?>
        <a data-izimodal-open="#deposit-modal" data-izimodal-zindex="20000" data-izimodal-preventclose="" href="" class="banner-top-button w-inline-block">
            <div class="text-block">Depositar</div>
        </a>
        <?php else: ?>
        <a class="banner-top-button w-inline-block" href="javascript:void(0)" data-izimodal-open="#register-modal" data-izimodal-zindex="20000" data-izimodal-preventclose="">
            <div class="text-block">Depositar</div>
        </a>
        <?php endif; ?>
    </div>
    <?php endif; ?>

    <main class="page">
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <!-- javascript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=65f63371ce39e674fcad5f42" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="<?php echo e(asset('assets/js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/iziModal.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/iziToast.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/custom.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/new-design/webflow.js')); ?>" type="text/javascript"></script>
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
<?php /**PATH /home/hasan/Desktop/real pro/coroabet/resources/views/layouts/web.blade.php ENDPATH**/ ?>