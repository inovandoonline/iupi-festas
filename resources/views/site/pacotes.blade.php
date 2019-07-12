@extends('site.template.layout')

@section('content')
    <div class="pattern-bg-3 py-12">
        <div class="container mx-auto">
            <div class="text-center">
                <h2 class="ps-b text-pink text-2xl md:text-5xl">Conheça nossos planos</h2>
                <p class="text-blue-light text-xl ps-b">Seu evento - Sua vontade!</p>
                <svg id="Layer_1" data-name="Layer 1" class="w-64" xmlns="http://www.w3.org/2000/svg"
                     viewBox="0 0 100 100">
                    <defs>
                        <style>
                            .cls-1 {
                                fill: #e8f4fa;
                            }

                            .cls-2 {
                                fill: #f0f0f0;
                            }

                            .cls-17, .cls-3 {
                                fill: #bdbec0;
                            }

                            .cls-4 {
                                fill: none;
                            }

                            .cls-17, .cls-4 {
                                stroke: #45413c;
                                stroke-linejoin: round;
                            }

                            .cls-5 {
                                fill: #4aeff7;
                            }

                            .cls-6 {
                                fill: #00dfeb;
                            }

                            .cls-7 {
                                fill: #00c9d4;
                            }

                            .cls-8 {
                                fill: #fff;
                            }

                            .cls-9 {
                                fill: #9ceb60;
                            }

                            .cls-10 {
                                fill: #6dd627;
                            }

                            .cls-11 {
                                fill: #46b000;
                            }

                            .cls-12 {
                                fill: #fff48c;
                            }

                            .cls-13 {
                                fill: #ffe500;
                            }

                            .cls-14 {
                                fill: #ebcb00;
                            }

                            .cls-15 {
                                fill: #ff866e;
                            }

                            .cls-16 {
                                fill: #ff6242;
                            }

                            .cls-18 {
                                fill: #020202;
                                opacity: 0.15;
                            }</style>
                    </defs>
                    <g id="_Group_" data-name="&lt;Group&gt;">
                        <circle class="cls-1" cx="50" cy="50" r="40"/>
                    </g>
                    <path class="cls-2"
                          d="M72.07,51.53H45.9V66.2a2,2,0,0,1-2,2H72.07a2,2,0,0,0,2-2V53.54A2,2,0,0,0,72.07,51.53Z"/>
                    <path class="cls-3"
                          d="M72.61,51.62a1.91,1.91,0,0,0-.54-.09H45.9V66.2a2,2,0,0,1-2,2h.77L71.84,52.43A2.06,2.06,0,0,0,72.61,51.62Z"/>
                    <path class="cls-4"
                          d="M72.07,51.53H45.9V66.2a2,2,0,0,1-2,2H72.07a2,2,0,0,0,2-2V53.54A2,2,0,0,0,72.07,51.53Z"/>
                    <rect class="cls-5" x="59.7" y="54.98" width="10.35" height="9.77" rx="1.15" ry="1.15"/>
                    <path class="cls-6" d="M59.7,56.13v3.35L67.45,55h-6.6A1.16,1.16,0,0,0,59.7,56.13Z"/>
                    <rect class="cls-4" x="59.7" y="54.98" width="10.35" height="9.77" rx="1.15" ry="1.15"/>
                    <path class="cls-6"
                          d="M45.9,55v9.78h8.63a1.16,1.16,0,0,0,1.15-1.15V56.13A1.16,1.16,0,0,0,54.53,55Z"/>
                    <path class="cls-7" d="M55.68,61.82V56.13A1.16,1.16,0,0,0,54.53,55H45.9v9.78h4.71Z"/>
                    <path class="cls-4"
                          d="M45.9,55v9.78h8.63a1.16,1.16,0,0,0,1.15-1.15V56.13A1.16,1.16,0,0,0,54.53,55Z"/>
                    <path class="cls-2"
                          d="M71.84,50.13a2,2,0,0,0,.73-2.74l-6.35-11a2,2,0,0,0-2.74-.72L45.9,45.89V65.16Z"/>
                    <path class="cls-8"
                          d="M71.84,50.13a2,2,0,0,0,.73-2.74l-6.35-11a2,2,0,0,0-2.74-.72l-.33.18a2,2,0,0,1,.77.75l7,12.07a2,2,0,0,1,0,1.92Z"/>
                    <path class="cls-3" d="M63.48,35.71,45.9,45.89V65.16l.9-.52,16.83-29Z"/>
                    <path class="cls-4"
                          d="M71.84,50.13a2,2,0,0,0,.73-2.74l-6.35-11a2,2,0,0,0-2.74-.72L45.9,45.89V65.16Z"/>
                    <rect class="cls-9" x="56.26" y="41.64" width="10.35" height="9.78" rx="1.15" ry="1.15"
                          transform="translate(-15.05 37.08) rotate(-30.1)"/>
                    <path class="cls-10"
                          d="M55.08,45.89l1.3,2.24,3.79-6.52-4.67,2.7A1.16,1.16,0,0,0,55.08,45.89Z"/>
                    <rect class="cls-4" x="56.26" y="41.64" width="10.35" height="9.78" rx="1.15" ry="1.15"
                          transform="translate(-15.05 37.08) rotate(-30.1)"/>
                    <path class="cls-10"
                          d="M50,47.49,45.9,49.88v8.84l.49.84A1.15,1.15,0,0,0,48,60l7-4a1.14,1.14,0,0,0,.42-1.57L51.6,47.91A1.15,1.15,0,0,0,50,47.49Z"/>
                    <path class="cls-11"
                          d="M50.29,58.63l3.77-6.49L51.6,47.91A1.15,1.15,0,0,0,50,47.49L45.9,49.88v8.84l.49.84A1.15,1.15,0,0,0,48,60Z"/>
                    <path class="cls-4"
                          d="M50,47.49,45.9,49.88v8.84l.49.84A1.15,1.15,0,0,0,48,60l7-4a1.14,1.14,0,0,0,.42-1.57L51.6,47.91A1.15,1.15,0,0,0,50,47.49Z"/>
                    <path class="cls-2"
                          d="M62.28,34.19a2,2,0,0,0-.73-2.74l-11-6.34a2,2,0,0,0-2.74.73L45.9,29.19V62.5Z"/>
                    <polygon class="cls-3"
                             points="47.63 26.21 45.9 29.2 45.9 62.5 47.63 59.52 47.63 26.21"/>
                    <path class="cls-8"
                          d="M49.46,26.8l12,6.91a2,2,0,0,1,.71.71l.14-.23a2,2,0,0,0-.73-2.74l-11-6.34a2,2,0,0,0-2.74.73L47.17,27A2,2,0,0,1,49.46,26.8Z"/>
                    <polygon class="cls-8" points="45.9 62.39 45.9 62.5 46.67 61.16 45.9 62.39"/>
                    <path class="cls-4"
                          d="M62.28,34.19a2,2,0,0,0-.73-2.74l-11-6.34a2,2,0,0,0-2.74.73L45.9,29.19V62.5Z"/>
                    <path class="cls-12"
                          d="M45.9,36.08V39l6.2,3.58a1.14,1.14,0,0,0,1.57-.42l4-7a1.14,1.14,0,0,0-.42-1.57l-6.47-3.75a1.15,1.15,0,0,0-1.57.42Z"/>
                    <polygon class="cls-13"
                             points="47.63 33.1 45.9 36.09 45.9 39.01 47.63 40.01 47.63 33.1"/>
                    <polygon class="cls-13"
                             points="47.63 33.1 45.9 36.09 45.9 37.73 47.63 37.27 47.63 33.1"/>
                    <path class="cls-13" d="M45.9,55.61l4.61-8a1.16,1.16,0,0,0-.42-1.57L45.9,43.66Z"/>
                    <polygon class="cls-14"
                             points="47.63 44.66 45.9 43.66 45.9 55.61 47.63 52.63 47.63 44.66"/>
                    <polygon class="cls-14"
                             points="47.63 44.66 45.9 43.66 45.9 48.25 47.63 47.79 47.63 44.66"/>
                    <path class="cls-4" d="M45.9,55.61l4.61-8a1.16,1.16,0,0,0-.42-1.57L45.9,43.66Z"/>
                    <path class="cls-4"
                          d="M45.9,36.08V39l6.2,3.58a1.14,1.14,0,0,0,1.57-.42l4-7a1.14,1.14,0,0,0-.42-1.57l-6.47-3.75a1.15,1.15,0,0,0-1.57.42Z"/>
                    <rect class="cls-2" x="29.23" y="23.36" width="16.68" height="44.85" rx="2" ry="2"/>
                    <path class="cls-8"
                          d="M43.9,23.36H31.23a2,2,0,0,0-2,2v1.73a2,2,0,0,1,2-2H43.9a2,2,0,0,1,2,2V25.36A2,2,0,0,0,43.9,23.36Z"/>
                    <rect class="cls-4" x="29.23" y="23.36" width="16.68" height="44.85" rx="2" ry="2"/>
                    <rect class="cls-15" x="32.68" y="27.38" width="9.78" height="10.35" rx="1.15"
                          ry="1.15"/>
                    <rect class="cls-4" x="32.68" y="27.38" width="9.78" height="10.35" rx="1.15"
                          ry="1.15"/>
                    <rect class="cls-16" x="32.68" y="41.76" width="9.78" height="10.35" rx="1.15"
                          ry="1.15"/>
                    <rect class="cls-4" x="32.68" y="41.76" width="9.78" height="10.35" rx="1.15"
                          ry="1.15"/>
                    <circle class="cls-17" cx="37.57" cy="62.46" r="1.72"/>
                    <ellipse class="cls-18" cx="51.65" cy="75.58" rx="23" ry="1.73"/>
                </svg>
            </div>
        </div>
        <div class="flex flex-wrap justify-around">
            @foreach($pacotes->all() as $pac)
                <div class="w-full md:w-1/2 md:px-12">
                    @include('site.components.pacote', $pac)
                </div>
            @endforeach
        </div>
    </div>
@endsection
