<div class="main-menu">

    <aside class="page__content__navbar__esq">
        <button class="navbar-toggler" type="button">
            <span class="navbar-toggler-icon"></span>
        </button>

    </aside>


    <div class="w-layout-hflex menu"><img src="<?php echo e(asset('assets/images/new-design/images/logo.png')); ?>" loading="lazy" sizes="(max-width: 479px) 100vw, (max-width: 767px) 131px, (max-width: 991px) 17vw, 146px" srcset="<?php echo e(asset('assets/images/new-design/images/logo-p-500.png')); ?> 500w, <?php echo e(asset('assets/images/new-design/images/logo-p-800.png')); ?> 800w, <?php echo e(asset('assets/images/new-design/images/logo-p-1080.png')); ?> 1080w, <?php echo e(asset('assets/images/new-design/images/logo-p-1600.png')); ?> 1600w, <?php echo e(asset('assets/images/new-design/images/logo-p-2000.png')); ?> 2000w, <?php echo e(asset('assets/images/new-design/images/logo-p-2600.png')); ?> 2600w, <?php echo e(asset('assets/images/new-design/images/logo.png 2893w')); ?>" class="logo">
        <div>
            <?php if(auth()->check()): ?>
                <div class="w-layout-hflex account">

                    <a href="/painel/wallet" class="wallet w-inline-block">
                        <div class="wallet-title">Seu saldo</div>
                        <div class="wallet-block"><img src="<?php echo e(asset('assets/images/new-design/images/plus.svg')); ?>" loading="lazy" alt="" class="wallet-block-icon">
                            <div class="wallet-balance"><?php echo e(\Helper::getBalance()); ?></div>
                        </div>
                    </a>

                    <?php if(auth()->user()->notifications()->count() > 0): ?>
                        <a href="/painel/notifications" class="nav-link nav-link-bg w-inline-block"><img src="<?php echo e(asset('assets/images/new-design/images/notification.svg')); ?>" loading="lazy" alt="" class="notification-icon"></a>
                    <?php endif; ?>

                    <?php if(!in_array(request()->route()->getName(), ['panel.wallet.deposits', 'panel.wallet.index', 'panel.wallet.withdrawals'])): ?>
                        <a data-izimodal-open="#deposit-modal" data-izimodal-zindex="20000" data-izimodal-preventclose="" href="javascript:void(0)" class="deposit-button w-button deposit-modal-work">Depositar</a>
                    <?php endif; ?>

                    <div data-animation="default" data-collapse="all" data-duration="400" data-easing="ease" data-easing2="ease" role="banner" class="navbar w-nav">
                        <div class="navbar-container w-container">
                            <nav role="navigation" class="nav-menu w-nav-menu">
                                <div class="dropdown">

                                    <?php if(in_array(auth()->user()->role_id, [0,1])): ?>
                                        <a href="/admin/login" class="nav-link w-inline-block"><img src="<?php echo e(asset('assets/images/new-design/images/security-configuration.svg')); ?>" loading="lazy" alt="" class="image-2">
                                            <div class="text-block-2">Admin</div>
                                        </a>
                                    <?php endif; ?>

                                    <a href="/painel/profile" class="nav-link w-inline-block"><img src="<?php echo e(asset('assets/images/new-design/images/user.svg')); ?>" loading="lazy" alt="" class="image-2">
                                        <div class="text-block-2">Meu Perfil</div>
                                    </a>
                                    <a href="/painel/wallet" class="nav-link w-inline-block"><img src="<?php echo e(asset('assets/images/new-design/images/wallet.svg')); ?>" loading="lazy" alt="" class="image-2">
                                        <div class="text-block-2">Carteira</div>
                                    </a>
                                    <a href="/painel/wallet/deposits" class="nav-link w-inline-block"><img src="<?php echo e(asset('assets/images/new-design/images/cash-in.svg')); ?>" loading="lazy" alt="" class="image-2">
                                        <div class="text-block-2">Depósitos</div>
                                    </a>
                                    <a href="/painel/wallet/withdrawals" class="nav-link w-inline-block"><img src="<?php echo e(asset('assets/images/new-design/images/cash-out.svg')); ?>" loading="lazy" alt="" class="image-2">
                                        <div class="text-block-2">Saques</div>
                                    </a>
                                    <a href="/painel/affiliates" class="nav-link w-inline-block"><img src="<?php echo e(asset('assets/images/new-design/images/money-bag.svg')); ?>" loading="lazy" alt="" class="image-2">
                                        <div class="text-block-2">Indique e Ganhe</div>
                                    </a>
                                    <div class="separator"></div>
                                    <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="nav-link w-inline-block"><img src="<?php echo e(asset('assets/images/new-design/images/logout.svg')); ?>" loading="lazy" alt="" class="image-2">
                                        <div class="text-block-2">Sair</div>
                                    </a>
                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                            </nav>
                            <div class="menu-button w-nav-button"><img src="<?php echo e(asset('assets/images/new-design/images/user.svg')); ?>" loading="lazy" alt="" class="menu-button-icon"></div>
                        </div>
                    </div>
                </div>
            <?php else: ?>
                <div class="w-layout-hflex auth">
                    <a href="#" class="auth-button-light w-button" data-izimodal-open="#login-modal" data-izimodal-zindex="20000" data-izimodal-preventclose="">
                        Entrar
                    </a>
                    <a class="auth-button w-button text-white" href="javascript:void(0)" data-izimodal-open="#register-modal" data-izimodal-zindex="20000" data-izimodal-preventclose="">
                        Cadastre-se
                    </a>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php if(!in_array(request()->route()->getName(), ['panel.wallet.deposits', 'panel.wallet.index', 'panel.wallet.withdrawals'])): ?>
    <?php echo $__env->make('includes.deposit', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>

<div id="login-modal" class="iziModal" data-izimodal-loop="">
    <div class="modal-dialog">
        <div class="modal-content modal-body">
            <div class="row">
                <div class="col-lg-6 banner-login p-0">
                    <img src="<?php echo e(asset('assets/images/br_bg.png')); ?>" alt="" class="img-fluid">
                </div>
                <div class="col-lg-6 relative p-0">
                    <div id="loading" class="loading-spinner">
                        <span class="spinner"></span>
                    </div>

                    <form id="loginForm" method="post" action="" class="form-login">
                        <?php echo csrf_field(); ?>
                        <h4 class="mb-3 font-bold">Entrar</h4>

                        <div class="input-group mb-3">
                            <span class="input-group-text" id="email"><i class="fa-regular register-modal-text fa-envelope"></i></span>
                            <input type="email" name="email" class="form-control register-modal-dull-text" placeholder="E-mail">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="password"><i class="fa-regular register-modal-text fa-lock"></i></span>
                            <input type="password" name="password" class="form-control register-modal-dull-text" placeholder="Senha">
                        </div>
                        <p>
                            <a href="<?php echo e(route('forgotPassword')); ?>" class="register-modal-text text-small">Esqueci minha senha</a>
                        </p>
                        <div class="d-grid mt-3">
                            <button type="submit" class="btn-primary-theme btn-block w-full mb-3">
                                Entrar
                            </button>
                        </div>
                        <p class="register-modal-text">Novo no <?php echo e(getenv('APP_NAME')); ?>? <a href="" onclick="openRegister(event)"><strong>Criar conta</strong></a></p>
                    </form>

                    <div class="login-wrap">
                        <div class="line-text">
                            <div class="l"></div>
                            <div class="t">Faça login diretamente com</div>
                            <div class="l"></div>
                        </div>

                        <div class="social-group">
                            <a href="<?php echo e(url('/auth/redirect/google')); ?>" class="login-with-google-btn w-full">
                                Logar com o Google
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="register-modal" class="iziModal" data-izimodal-loop="">
    <div class="modal-dialog">
        <div class="modal-content modal-body">
            <div class="row">
                <div class="col-lg-6 banner-login">
                    <img src="<?php echo e(asset('assets/images/br_bg.png')); ?>" alt="" class="img-fluid">
                </div>
                <div class="col-lg-6 p-0">
                    <div class="relative" style="height: 100%;">
                        <div id="loading_register" class="loading-spinner">
                            <span class="spinner"></span>
                        </div>

                        <form id="registrationForm" action="" method="post" class="form-login">
                            <?php echo csrf_field(); ?>
                            <h4 class="mb-3 font-bold">Cadastrar</h4>

                            <div class="input-group mb-3">
                                <span class="input-group-text" id="user"><i class="fa-regular fa-user"></i></span>
                                <input type="text" name="name" class="form-control register-modal-dull-text" placeholder="Nome de usuário" aria-label="Nome de usuário" aria-describedby="user" required>
                            </div>
                            
                            
                            
                            
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="email"><i class="fa-regular fa-envelope"></i></span>
                                <input type="email" name="email" class="form-control register-modal-dull-text" placeholder="E-mail" required>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="password"><i class="fa-regular fa-lock"></i></span>
                                <input id="passwordField" type="password" name="password" class="form-control register-modal-dull-text" placeholder="Senha" required>
                                <button type="button" id="togglePassword" class="input-group-text " onclick="togglePasswordField()"><i id="eyeIcon" class="fa-regular fa-eye"></i></button>

                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="password"><i class="fa-regular fa-lock"></i></span>
                                <input id="passwordConfirmField" type="password" name="password_confirmation" class="form-control register-modal-dull-text" placeholder="Confirme a senha" required>
                                <button type="button" id="togglePassword" class="input-group-text" onclick="togglePasswordField()"><i id="eyeIcon" class="fa-regular fa-eye"></i></button>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="password"><i class="fa-brands fa-whatsapp"></i></span>
                                <input type="text" name="phone" class="form-control sp_celphones register-modal-dull-text" placeholder="Whastapp" required>
                            </div>
                            <?php if(app('request')->input('affiliate')): ?>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="token"><i class="fa-light fa-user-group-simple"></i></span>
                                    <input type="text" name="affiliate_token" readonly class="form-control register-modal-dull-text" placeholder="Token" value="<?php echo e(app('request')->input('affiliate')); ?>" required>
                                </div>
                            <?php endif; ?>
                            <div class="d-grid mt-3">
                                <button type="submit" class="btn-primary-theme btn-block w-full mb-3">
                                    Registrar-se
                                </button>
                                <p class="text-center register-modal-dull-text">
                                    Ao clicar no botão Criar conta, você aceita nossos <a href="">termos de uso</a> e <a href="">política</a> de <a href="">privacidade</a>.
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->startPush('scripts'); ?>
    <script src="<?php echo e(asset('/assets/js/jquery.mask.min.js')); ?>"></script>
    <script>
        $("#login-modal").iziModal({
            title: 'VAMOS JOGAR?',
            subtitle: 'Estamos te esperando para mais uma rodada!',
            headerColor: '#202327',
            theme: 'dark',  // light
            background:  '#202327',
            width: 700,
            closeOnEscape: false,
            overlayClose: false,
            onFullscreen: function(){},
            onResize: function(){},
            onOpening: function(){},
            onOpened: function(){},
            onClosing: function(){},
            onClosed: function(){},
            afterRender: function(){}
        });

        $("#register-modal").iziModal({
            title: 'REGISTRAR-SE',
            subtitle: 'Estamos te esperando para mais uma rodada!',
            headerColor: '#202327',
            theme: 'dark',  // light
            background:  '#202327',
            width: 700,
            closeOnEscape: false,
            overlayClose: false,
            onFullscreen: function(){},
            onResize: function(){},
            onOpening: function(){
                var SPMaskBehavior = function (val) {
                        return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
                    },
                    spOptions = {
                        onKeyPress: function(val, e, field, options) {
                            field.mask(SPMaskBehavior.apply({}, arguments), options);
                        }
                    };

                $('.sp_celphones').mask(SPMaskBehavior, spOptions);
            },
            onOpened: function(){},
            onClosing: function(){},
            onClosed: function() {
                limparCampos();
            },
            afterRender: function(){}
        });

        function limparCampos() {
            const modal = document.getElementById('register-modal'); // Get the register modal element
            const campos = modal.querySelectorAll('input'); // Select only the input fields within the register modal

            campos.forEach(campo => {
                campo.value = ''; // Clear the value of each input field
            });
        }

        document.getElementById('loginForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Evita o comportamento padrão de envio do formulário

            // Exibe o loading
            const loadingElement = document.getElementById('loading');
            loadingElement.style.display = 'block';

            const formData = new FormData(this);

            const errors = {};

            const email = formData.get('email');
            if (!email) {
                errors.email = 'Campo e-mail é obrigatório.';
            }

            const password = formData.get('password');
            if (!password) {
                errors.password = 'Campo senha é obrigatório.';
            } else if (password.length < 6) {
                errors.password = 'A senha deve ter pelo menos 6 caracteres.';
            }


            // Se houver erros, exiba as mensagens
            if (Object.keys(errors).length > 0) {
                Object.entries(errors).forEach(([key, value]) => {
                    iziToast.show({
                        title: 'Atenção',
                        message: value,
                        theme: 'dark',
                        icon: 'fa-regular fa-circle-exclamation',
                        iconColor: '#ffffff',
                        backgroundColor: '#b51408',
                        position: 'topRight'
                    });
                });

                // Oculta o loading
                loadingElement.style.display = 'none';

                return; // Impede o envio do formulário em caso de erro
            }

            fetch('<?php echo e(route('login')); ?>', {
                method: 'POST',
                body: formData
            })
                .then(response => response.json())
                .then(data => {
                    if(data.status) {
                        iziToast.show({
                            title: 'Sucesso',
                            message: 'Usuário logado com sucesso',
                            theme: 'dark',
                            icon: 'fa-solid fa-check',
                            iconColor: '#ffffff',
                            backgroundColor: '#23ab0e',
                            position: 'topRight',
                            timeout: 2000,
                            onClosing: function () {},
                            onClosed: function () {
                                $("#login-modal").iziModal('close');
                                setTimeout(function() {
                                    window.location.replace('<?php echo e(url('/')); ?>');
                                }, 1000);
                            }
                        });
                    }else{
                        if(data.error != undefined) {
                            iziToast.show({
                                title: 'Atenção',
                                message: data.error,
                                theme: 'dark',
                                icon: 'fa-regular fa-circle-exclamation',
                                iconColor: '#ffffff',
                                backgroundColor: '#b51408',
                                position: 'topRight'
                            });
                        }else{
                            Object.entries(data).forEach(([key, value]) => {
                                iziToast.show({
                                    title: 'Atenção',
                                    message: value[0],
                                    theme: 'dark',
                                    icon: 'fa-regular fa-circle-exclamation',
                                    iconColor: '#ffffff',
                                    backgroundColor: '#b51408',
                                    position: 'topRight'
                                });
                            });
                        }
                    }

                    loadingElement.style.display = 'none';
                })
                .catch(error => {
                    iziToast.show({
                        title: 'Atenção',
                        message: JSON.stringify(error),
                        theme: 'dark',
                        icon: 'fa-regular fa-circle-exclamation',
                        iconColor: '#ffffff',
                        backgroundColor: '#b51408',
                        position: 'topRight'
                    });

                    console.error('Erro ao enviar requisição:', error);
                    loadingElement.style.display = 'none';
                });
        });

        $(document).ready(function() {
            $('#registrationForm').submit(function(event) {
                event.preventDefault(); // Evita o comportamento padrão de envio do formulário

                // Exibe o loading
                const loadingElement = document.getElementById('loading_register');
                loadingElement.style.display = 'block';

                const formData = new FormData(this);

                const errors = {};


                // Validar campos
                if (!formData.get('name')) {
                    errors.name = 'Campo nome é obrigatório.';
                }

                const email = formData.get('email');
                if (!email) {
                    errors.email = 'Campo e-mail é obrigatório.';
                }

                const password = formData.get('password');
                if (!password) {
                    errors.password = 'Campo senha é obrigatório.';
                } else if (password.length < 6) {
                    errors.password = 'A senha deve ter pelo menos 6 caracteres.';
                }

                const password_confirmation = formData.get('password_confirmation');
                if (password !== password_confirmation) {
                    errors.password_confirmation = 'As senhas não coincidem.';
                }

                if (!formData.get('phone')) {
                    errors.phone = 'Campo telefone é obrigatório.';
                }

                // Se houver erros, exiba as mensagens
                if (Object.keys(errors).length > 0) {
                    Object.entries(errors).forEach(([key, value]) => {
                        iziToast.show({
                            title: 'Atenção',
                            message: value,
                            theme: 'dark',
                            icon: 'fa-regular fa-circle-exclamation',
                            iconColor: '#ffffff',
                            backgroundColor: '#b51408',
                            position: 'topRight'
                        });
                    });

                    // Oculta o loading
                    loadingElement.style.display = 'none';

                    return; // Impede o envio do formulário em caso de erro
                }

                fetch('/register', {
                    method: 'POST',
                    body: formData
                })
                    .then(response => response.json())
                    .then(data => {
                        if(data.status) {
                            iziToast.show({
                                title: 'Sucesso',
                                message: 'Usuário logado com sucesso',
                                theme: 'dark',
                                icon: 'fa-solid fa-check',
                                iconColor: '#ffffff',
                                backgroundColor: '#23ab0e',
                                position: 'topRight',
                                onClosing: function () {},
                                onClosed: function () {
                                    $("#register-modal").iziModal('close');
                                    setTimeout(function() {
                                        window.location.replace('<?php echo e(url('/')); ?>');

                                    }, 1000);
                                }
                            });
                        }else{
                            if(data.error != undefined) {
                                iziToast.show({
                                    title: 'Atenção',
                                    message: data.error,
                                    theme: 'dark',
                                    icon: 'fa-regular fa-circle-exclamation',
                                    iconColor: '#ffffff',
                                    backgroundColor: '#b51408',
                                    position: 'topRight'
                                });
                            }else{
                                Object.entries(data).forEach(([key, value]) => {
                                    iziToast.show({
                                        title: 'Atenção',
                                        message: value[0],
                                        theme: 'dark',
                                        icon: 'fa-regular fa-circle-exclamation',
                                        iconColor: '#ffffff',
                                        backgroundColor: '#b51408',
                                        position: 'topRight'
                                    });
                                });
                            }
                        }

                        loadingElement.style.display = 'none';
                    })
                    .catch(error => {
                        iziToast.show({
                            title: 'Atenção',
                            message: JSON.stringify(error),
                            theme: 'dark',
                            icon: 'fa-regular fa-circle-exclamation',
                            iconColor: '#ffffff',
                            backgroundColor: '#b51408',
                            position: 'topRight'
                        });

                        console.error('Erro ao enviar requisição:', error);
                        loadingElement.style.display = 'none';
                    });
            });
        });

        function togglePasswordField() {
            const passwordField = document.getElementById('passwordField');
            const passwordConfirmField = document.getElementById('passwordConfirmField');
            const toggleButton = document.getElementById('togglePassword');
            const eyeIcon = document.getElementById('eyeIcon');

            if (passwordField.type === 'password') {
                passwordField.type = 'text';
                passwordConfirmField.type = 'text';
                eyeIcon.className = 'fa-regular fa-eye-slash';
            } else {
                passwordField.type = 'password';
                passwordConfirmField.type = 'password';
                eyeIcon.className = 'fa-regular fa-eye';
            }
        }

        function openRegister(event) {
            event.preventDefault();

            $("#login-modal").iziModal('close');
            $("#register-modal").iziModal('open');
        }
    </script>

    <?php if(app('request')->input('action') == 'login'): ?>
        <script>
            $("#login-modal").iziModal('open');
        </script>
    <?php endif; ?>

    <?php if(app('request')->input('action') == 'register'): ?>
        <script>
            $("#register-modal").iziModal('open');
        </script>
    <?php endif; ?>
<?php $__env->stopPush(); ?>
<?php /**PATH /home/hasan/Desktop/real pro/coroabet/resources/views/includes/navbar_top.blade.php ENDPATH**/ ?>