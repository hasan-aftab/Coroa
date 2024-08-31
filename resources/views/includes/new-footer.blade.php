<div class="footer">
    <div class="row">
        <div class="col-lg-6 col-sm-12">
            <div class="footer-info">
                <div>
                    <img src="{{ asset('assets/images/logo.png') }}" alt="" class="footer-logo" width="">
                    <img src="{{ asset('/assets/images/+18.png') }}" alt="" width="38">
                </div>
                <p class="{{ url('/sobre-nos') }}">
                    <strong>{{ getenv('APP_NAME') }}</strong> é uma comunidade dedicada a oferecer a melhor experiência aos jogadores.
                    Estamos confiantes de que a Coroa Bet revolucionará a indústria de cassinos online.
                    Experimente! Divirta-se jogando e conquiste vitórias!
                </p>
            </div>
        </div>
        <div class="col-lg-6 col-sm-12">

            <div class="footer-right">

                ©{{ date('Y') }} {{ env('APP_NAME') }} Todos os direitos reservados.
            </div>
        </div>
    </div>

</div>
