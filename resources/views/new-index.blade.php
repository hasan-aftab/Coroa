@extends('layouts.new-web')

@section('title', 'Coroa Bet - Multiplique seu deposito em 10x! Deposite R$ 50 e ganhe R$ 500.')

@section('seo')
    <link rel="canonical" href="{{ url()->current() }}" />
    <meta name="description" content="Bem-vindo à Coroa Bet - o melhor cassino online com uma ampla seleção de jogos e uma experiência de aposta fácil e divertida.">
    <meta name="keywords" content="Coroa Bet, cassino online, jogos de slot, apostas em futebol, Fortune Tiger, Fortune OX">

    <meta property="og:locale" content="pt_BR" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Coroa Bet - Multiplique seu deposito em 10x! Deposite R$ 50 e ganhe R$ 500." />
    <meta property="og:description" content="Bem-vindo à Coroa Bet - o melhor cassino online com uma ampla seleção de jogos e uma experiência de aposta fácil e divertida." />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:site_name" content="Coroa Bet - Multiplique seu deposito em 10x! Deposite R$ 50 e ganhe R$ 500." />
    <meta property="og:image" content="{{ asset('/assets/images/banner-principal-1.png') }}" />
    <meta property="og:image:secure_url" content="{{ asset('/assets/images/banner-principal-1.png') }}" />
    <meta property="og:image:width" content="1024" />
    <meta property="og:image:height" content="571" />

    <meta name="twitter:title" content="Coroa Bet - Multiplique seu deposito em 10x! Deposite R$ 50 e ganhe R$ 500.">
    <meta name="twitter:description" content="Bem-vindo à Coroa Bet - o melhor cassino online com uma ampla seleção de jogos e uma experiência de aposta fácil e divertida.">
    <meta name="twitter:image" content="{{ asset('/assets/images/banner-principal-1.png') }}"> <!-- Substitua pelo link da imagem que deseja exibir -->
    <meta name="twitter:url" content="{{ url('/') }}"> <!-- Substitua pelo link da sua página -->
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/splide-core.min.css') }}">
@endpush

@section('content')
    <div class="container">
        @include('includes.new-navbar_left')

        <div class="page__content">
            @include('includes.new-navbar_top')

            <section class="modelo-destaque-jogos">

                <section id="image-carousel" class="splide" aria-label="">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide">
                                <a href="{{ url('/vgames/exclusive/fortunetiger') }}">
                                    <img src="{{ asset('assets/images/banner-principal-1.png') }}" alt="">
                                </a>
                            </li>
                            <li class="splide__slide">
                                <a href="{{ url('/vgames/exclusive/fortunetiger') }}">
                                    <img src="{{ asset('assets/images/banner-principal-2.png') }}" alt="">
                                </a>
                            </li>
                            <li class="splide__slide">
                                <a href="">
                                    <img src="{{ asset('/assets/images/banner-principal-3.png') }}" alt="">
                                </a>
                            </li>
                        </ul>
                    </div>
                </section>

                @if(count($gamesExclusives) > 0)
                    <div class="mt-5">
                        @include('includes.title', ['link' => url('/games?tab=exclusives'), 'title' => 'Jogos da Casa', 'icon' => 'fa-regular fa-gamepad-modern'])
                    </div>

                    <div class="d-steam-cards js-steamCards">
                        @foreach($gamesExclusives as $gamee)
                            <a href="{{ route('web.vgames.show', ['game' => $gamee->uuid]) }}" class="d-steam-card-wrapper">
                                <div class="d-steam-card js-steamCard" style="background-image: url('storage/{{ $gamee->cover }}')"></div>
                            </a>
                        @endforeach
                    </div>
                @endif

                {{-- @if(count($gamesExclusives) > 0)
                    <div class="mt-5">
                        -- @include('includes.title', ['link' => url('/games?tab=pragmatic'), 'title' => 'Jogos Pragmatic', 'icon' => 'fa-regular fa-gamepad-modern'])
                    </div>

                    <div class="d-steam-cards js-steamCards">
                        @foreach($gamesPragmatic as $game)
                            <a href="{{ route('web.kscinus.go', ['game' => $game->key, 'type' => $game->type]) }}" class="d-steam-card-wrapper">
                                <div class="d-steam-card js-steamCard" style="background-image: url('storage/{{ $game->cover }}')"></div>
                            </a>
                        @endforeach
                    </div>
                @endif --}}

                @if(count($gamesPopulars) > 0)
                    @include('includes.title', ['link' => url('/games?tab=popular'), 'title' => 'Populares', 'icon' => 'fa-duotone fa-stars'])

                    <div class="row mt-3">
                        @foreach($gamesPopulars as $gamep)
                            <div class="col-xl-2 col-lg-3 col-md-3 col-sm-6 caixa-loop-elementos">
                                <a href="{{ route('web.vgames.show', ['game' => $gamep->uuid]) }}" class="inner-loop-elementos">
                                    <img src="{{ asset('storage/'.$gamep->image) }}" alt="{{ $gamep->name }}" class="img-fluid rounded-3">
                                </a>
                            </div>
                        @endforeach
                    </div>
                @endif

                @if(count($games) > 0)
                    @include('includes.title', ['link' => url('/games?tab=all'), 'title' => 'Todos os Jogos', 'icon' => 'fa-duotone fa-gamepad-modern'])

                    <div class="row mt-3">
                        @foreach($games as $game)
                            <div class="col-xl-2 col-lg-3 col-md-3 col-sm-6 caixa-loop-elementos">
                                <a href="{{ route('web.game.index', ['slug' => $game->slug]) }}" class="inner-loop-elementos">
                                    <img src="{{ asset('storage/'.$game->image) }}" alt="{{ $game->name }}" class="img-fluid rounded-3">
                                </a>
                            </div>
                        @endforeach
                    </div>
                @endif
            </section>

            <div class="mt-5">
                @include('includes.title', ['link' => url('painel/affiliates'), 'title' => 'Afiliados', 'icon' => 'fa-light fa-face-tongue-money', 'labelLink' => 'Menu'])
            </div>

            <section class="affiliate-block">
                <div class="affiliate-block-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <img src="{{ asset('/assets/images/business_afiliado.png') }}" alt="" class="img-fluid">
                        </div>
                        <div class="col-lg-8">
                            <div class="affiliate-info my-3">
                                <h1>SAIBA MAIS SOBRE NOSSO <span>PROGRAMA DE AFILIADOS</span></h1>
                                <p>
                                    Trabalhe conosco como afiliado e obtenha lucros significativos por meio de suas indicações.
                                    Oferecemos condições especiais exclusivas para nossos afiliados.
                                </p>
                                <form action="{{ route('panel.affiliates.join') }}" method="post">
                                    @csrf
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
                @include('includes.title', ['link' => url('como-funciona'), 'title' => 'F.A.Q', 'icon' => 'fa-light fa-circle-info', 'labelLink' => 'Saiba mais'])
            </div>

            @include('web.home.sections.faq')

            @include('includes.new-footer')
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('assets/js/splide.min.js') }}"></script>
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
@endpush

