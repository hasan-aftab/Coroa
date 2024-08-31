@extends('layouts.web')

@section('title', 'Coroa Bet - Multiplique seu deposito em 10x! Deposite R$ 50 e ganhe R$ 500.')

@section('seo')
    <link rel="canonical" href="{{ url()->current() }}"/>
    <meta name="description"
          content="Bem-vindo à Coroa Bet - o melhor cassino online com uma ampla seleção de jogos e uma experiência de aposta fácil e divertida.">
    <meta name="keywords"
          content="Coroa Bet, cassino online, jogos de slot, apostas em futebol, Fortune Tiger, Fortune OX">

    <meta property="og:locale" content="pt_BR"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="Coroa Bet - Multiplique seu deposito em 10x! Deposite R$ 50 e ganhe R$ 500."/>
    <meta property="og:description"
          content="Bem-vindo à Coroa Bet - o melhor cassino online com uma ampla seleção de jogos e uma experiência de aposta fácil e divertida."/>
    <meta property="og:url" content="{{ url()->current() }}"/>
    <meta property="og:site_name"
          content="Coroa Bet - Multiplique seu deposito em 10x! Deposite R$ 50 e ganhe R$ 500."/>
    <meta property="og:image" content="{{ asset('/assets/images/banner-principal-1.png') }}"/>
    <meta property="og:image:secure_url" content="{{ asset('/assets/images/banner-principal-1.png') }}"/>
    <meta property="og:image:width" content="1024"/>
    <meta property="og:image:height" content="571"/>

    <meta name="twitter:title" content="Coroa Bet - Multiplique seu deposito em 10x! Deposite R$ 50 e ganhe R$ 500.">
    <meta name="twitter:description"
          content="Bem-vindo à Coroa Bet - o melhor cassino online com uma ampla seleção de jogos e uma experiência de aposta fácil e divertida.">
    <meta name="twitter:image"
          content="{{ asset('/assets/images/banner-principal-1.png') }}"> <!-- Substitua pelo link da imagem que deseja exibir -->
    <meta name="twitter:url" content="{{ url('/') }}"> <!-- Substitua pelo link da sua página -->
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/splide-core.min.css') }}">
@endpush

@section('content')

    <section>
        <div class="columns w-row">

            @include('includes.navbar_left')

            <div class="column-2 w-col w-col-9">

                @include('includes.navbar_top')

                <div class="banners">
                    <div data-delay="4000" data-animation="slide" class="slider w-slider" data-autoplay="true"
                         data-easing="ease" data-hide-arrows="false" data-disable-swipe="false" data-autoplay-limit="0"
                         data-nav-spacing="3" data-duration="500" data-infinite="true">
                        <div class="mask w-slider-mask">
                            <div class="slide-1 w-slide">
                                <a href="#" class="banner-1 w-inline-block"></a>
                            </div>
                            <div class="slide-1 w-slide">
                                <a href="#" class="banner-2 w-inline-block"></a>
                            </div>
                            <div class="slide-1 w-slide">
                                <a href="#" class="banner-3 w-inline-block"></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="static-games" @if(!auth()->user()) href="javascript:void(0)"
                     data-izimodal-open="#register-modal" data-izimodal-zindex="20000"
                     data-izimodal-preventclose="" @endif>
                    <div class="list-title"><img src="{{ asset('assets/images/new-design/images/trophy.svg') }}"
                                                 loading="lazy" alt="" class="list-icon">
                        <div class="game-list-title">Jogos da casa</div>
                    </div>
                    <div class="game-list">
                        <div class="game-list-grid">
                            @if(!auth()->user())
                                @php
                                    $count = 0;
                                @endphp
                                @foreach($gamesExclusives as $gamee)
                                    @if($count < 6)
                                        <a href="{{ route('web.vgames.show', ['game' => $gamee->uuid]) }}" class="game-card w-inline-block">
                                            <img src=' {{ asset("storage/$gamee->cover") }}' loading="lazy" alt="" class="game-card-image">
                                        </a>
                                        @php
                                            $count++;
                                        @endphp
                                    @else
                                        @break
                                    @endif
                                @endforeach

                                @foreach(range(1,6) as $padlock)
                                    <a href="#" class="game-card w-inline-block"><img
                                            src="{{ asset('assets/images/new-design/images/game-lock.png') }}"
                                            loading="lazy" alt="" class="game-card-image">
                                    </a>
                                @endforeach

                            @else
                                @foreach($gamesExclusives as $gamee)
                                    <a href="{{ route('web.vgames.show', ['game' => $gamee->uuid]) }}"
                                       class=" game-card w-inline-block">
                                        <img
                                            src='{{asset("/storage/$gamee->cover")}}'
                                            loading="lazy" alt=""
                                            class="game-card-image">
                                    </a>
                                @endforeach
                            @endif

                        </div>
                    </div>

                    <div class="game-exclusives">
                        <div class="list-title"><img src="{{ asset('assets/images/new-design/images/diamond.png') }}"
                                                     loading="lazy" alt="" class="list-icon">
                            <div class="game-list-title">Slots em destaque</div>
                        </div>

                        <div class="game-list">
                            <div class="game-list-grid">

                                @if(!auth()->user())
                                        @php
                                            $count = 0;
                                        @endphp
                                        @foreach($gamesPopulars as $gamep)
                                            @if($count < 6)
                                                <a href="{{ route('web.vgames.show', ['game' => $gamep->uuid]) }}" class="game-card w-inline-block">
                                                    <img src='{{ asset("storage/".$gamep->image) }}' alt="{{ $gamep->name }}" loading="lazy" class="game-card-image">
                                                </a>
                                                @php
                                                    $count++;
                                                @endphp
                                            @else
                                                @break
                                            @endif
                                        @endforeach
                                    @foreach(range(1,6) as $padlock)
                                        <a href="#" class="game-card w-inline-block"><img
                                                src="{{ asset('assets/images/new-design/images/game-lock.png') }}"
                                                loading="lazy" alt="" class="game-card-image">
                                        </a>
                                    @endforeach
                                @else
                                    @foreach($gamesPopulars as $gamep)
                                        <a href="{{ route('web.vgames.show', ['game' => $gamep->uuid]) }}"
                                           class="game-card w-inline-block">
                                            <img src='{{ asset("storage/".$gamep->image) }}' alt="{{ $gamep->name }}" loading="lazy" class="game-card-image">

                                        </a>
                                    @endforeach
                                @endif
                            </div>
                        </div>

                    </div>

                    <div class="static-games" @if(!auth()->user()) href="javascript:void(0)"
                         data-izimodal-open="#register-modal" data-izimodal-zindex="20000"
                         data-izimodal-preventclose="" @endif >

                        <div class="list-title"><img src="{{ asset('assets/images/new-design/images/live.png') }}"
                                                     loading="lazy" alt="" class="list-icon">
                            <div class="game-list-title">Ao vivo</div>
                        </div>

                        <div class="game-list">
{{--                            <div class="game-list-grid">--}}


                        {{--Uncomment it If u want static cards--}}
{{--                                <a href="https://coroabet.online/vgames/exclusive/fortunetiger"--}}
{{--                                   class="game-card w-inline-block"><img--}}
{{--                                        src="{{ asset('assets/images/new-design/images/live_1.png') }}" loading="lazy"--}}
{{--                                        alt="" class="game-card-image"></a>--}}
{{--                                <a href="https://coroabet.online/vgames/exclusive/fortunetiger"--}}
{{--                                   class="game-card w-inline-block"><img--}}
{{--                                        src="{{ asset('assets/images/new-design/images/live2.png') }}" loading="lazy"--}}
{{--                                        alt="" class="game-card-image"></a>--}}
{{--                                <a href="https://coroabet.online/vgames/exclusive/fortunetiger"--}}
{{--                                   class="game-card w-inline-block"><img--}}
{{--                                        src="{{ asset('assets/images/new-design/images/live3.png') }}" loading="lazy"--}}
{{--                                        alt="" class="game-card-image"></a>--}}
{{--                                <a href="https://coroabet.online/vgames/exclusive/fortunetiger"--}}
{{--                                   class="game-card w-inline-block"><img--}}
{{--                                        src="{{ asset('assets/images/new-design/images/live4.png') }}" loading="lazy"--}}
{{--                                        alt="" class="game-card-image"></a>--}}
{{--                                <a href="https://coroabet.online/vgames/exclusive/fortunetiger"--}}
{{--                                   class="game-card w-inline-block"><img--}}
{{--                                        src="{{ asset('assets/images/new-design/images/live5.png') }}" loading="lazy"--}}
{{--                                        alt="" class="game-card-image"></a>--}}
{{--                                <a href="https://coroabet.online/vgames/exclusive/fortunetiger"--}}
{{--                                   class="game-card w-inline-block"><img--}}
{{--                                        src="{{ asset('assets/images/new-design/images/live8.png') }}" loading="lazy"--}}
{{--                                        alt="" class="game-card-image"></a>--}}
{{--                                <a href="https://coroabet.online/vgames/exclusive/fortunetiger"--}}
{{--                                   class="game-card w-inline-block"><img--}}
{{--                                        src="{{ asset('assets/images/new-design/images/live9.png') }}" loading="lazy"--}}
{{--                                        alt="" class="game-card-image"></a>--}}
{{--                                <a href="https://coroabet.online/vgames/exclusive/fortunetiger"--}}
{{--                                   class="game-card w-inline-block"><img--}}
{{--                                        src="{{ asset('assets/images/new-design/images/live10.png') }}" loading="lazy"--}}
{{--                                        alt="" class="game-card-image"></a>--}}
{{--                                <a href="https://coroabet.online/vgames/exclusive/fortunetiger"--}}
{{--                                   class="game-card w-inline-block"><img--}}
{{--                                        src="{{ asset('assets/images/new-design/images/live11.png') }}" loading="lazy"--}}
{{--                                        alt="" class="game-card-image"></a>--}}
{{--                                <a href="https://coroabet.online/vgames/exclusive/fortunetiger"--}}
{{--                                   class="game-card w-inline-block"><img--}}
{{--                                        src="{{ asset('assets/images/new-design/images/live12.png') }}" loading="lazy"--}}
{{--                                        alt="" class="game-card-image"></a>--}}
{{--                                <a href="https://coroabet.online/vgames/exclusive/fortunetiger"--}}
{{--                                   class="game-card w-inline-block"><img--}}
{{--                                        src="{{ asset('assets/images/new-design/images/live13.png') }}" loading="lazy"--}}
{{--                                        alt="" class="game-card-image"></a>--}}
{{--                                <a href="https://coroabet.online/vgames/exclusive/fortunetiger"--}}
{{--                                   class="game-card w-inline-block"><img--}}
{{--                                        src="{{ asset('assets/images/new-design/images/live14.png') }}" loading="lazy"--}}
{{--                                        alt="" class="game-card-image"></a>--}}
{{--                            </div>--}}

                            <div class="game-list-grid">

                                @if(!auth()->user())
                                    @php
                                        $count = 0;
                                    @endphp
                                    @foreach($games as $game)
                                        @if($count < 12)
                                            <a href="{{ route('web.vgames.show', ['game' => $game->uuid]) }}" class="game-card w-inline-block">
                                                <img src='{{ asset("storage/".$game->image) }}' alt="{{ $game->name }}" loading="lazy" class="game-card-image">
                                            </a>
                                            @php
                                                $count++;
                                            @endphp
                                        @else
                                            @break
                                        @endif
                                    @endforeach
                                    @foreach(range(1,12) as $padlock)
                                        <a href="#" class="game-card w-inline-block"><img
                                                src="{{ asset('assets/images/new-design/images/game-lock.png') }}"
                                                loading="lazy" alt="" class="game-card-image">
                                        </a>
                                    @endforeach
                                @else
                                    @foreach($games as $game)
                                        <a href="{{ route('web.vgames.show', ['game' => $game->uuid]) }}"
                                           class="game-card w-inline-block">
                                            <img src='{{ asset("storage/".$game->image) }}' alt="{{ $game->name }}" loading="lazy" class="game-card-image">

                                        </a>
                                    @endforeach
                                @endif
                            </div>
                        </div>

                    </div>

                    @include('includes.footer')

                    <div class="nav-mobile">
                        <div class="div-nav-mobile">
                            <a href="#" class="nav-mobile-link w-inline-block"><img
                                    src="{{ asset('assets/images/new-design/images/home.svg') }}" loading="lazy" alt=""
                                    class="image-4">
                                <div class="nav-mobile-description">Início</div>
                            </a>
                            <a href="/painel/affiliates" class="nav-mobile-link w-inline-block"><img
                                    src="{{ asset('assets/images/new-design/images/money-bag.svg') }}" loading="lazy"
                                    alt="" class="image-4">
                                <div class="nav-mobile-description">Afiliados</div>
                            </a>
                        </div>
                        <a href="#" class="nav-mobile-deposit w-inline-block" href="javascript:void(0)"
                           @if(auth()->user())
                               data-izimodal-open="#deposit-modal" data-izimodal-zindex="20000" data-izimodal-preventclose=""
                           @else
                               data-izimodal-open="#register-modal" data-izimodal-zindex="20000" data-izimodal-preventclose=""
                           @endif
                        >
                            <div class="div-block-4">
                                <div class="lottie-animation" data-w-id="33bf565a-e5ac-aec8-8bb1-1c8a1ed284c8"
                                     data-animation-type="lottie" data-src="documents/Xegzd3URAO.json" data-loop="1"
                                     data-direction="1" data-autoplay="1" data-is-ix2-target="0" data-renderer="svg"
                                     data-default-duration="1.5" data-duration="0"></div>
                            </div>
                        </a>
                        <div class="div-nav-mobile">
                            <a href="/painel/notifications" class="nav-mobile-link w-inline-block"><img
                                    src="{{ asset('assets/images/new-design/images/notification.svg') }}" loading="lazy"
                                    alt="" class="image-4">
                                <div class="nav-mobile-description">Notificações</div>
                            </a>
                            <a href="/painel/profile" class="nav-mobile-link w-inline-block"><img
                                    src="{{ asset('assets/images/new-design/images/user.svg') }}" loading="lazy" alt=""
                                    class="image-4">
                                <div class="nav-mobile-description">Perfil</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
