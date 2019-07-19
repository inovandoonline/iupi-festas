@extends('site.template.layout')

@section('js')
    <script src="{{ asset('js/jquery.mask.min.js') }}"></script>
<script>
    $(document).ready(function(){
        $('#phone').mask('(00) 0 0000-0000');
        $('#date').mask('00/00/0000', {clearIfNotMatch: true});
    });
</script>
@endsection

@section('content')
    <div class="w-full bg-cover bg-no-repeat"
         style="background-image: url('/uploads/imagens/fale-conosco.jpeg')">
        <div class="h-full">
            <div class="flex flex-row px-2">
                <div class="mx-auto my-16 md:mt-32 md:ml-32 md:max-w-lg pt-6 px-4 bg-white rounded-lg shadow-lg animated fadeIn delay-1s">
                    <div class="text-center">
                        <h1 class="ps-b text-blue text-3xl md:text-4xl animated fadeInDown delay-2s">Fale Conosco</h1>
                        <h4 class="ps-b text-pink animated fadeInDown delay-2s">Faça um orçamento sem compromisso</h4>
                        <img src="{{ asset('assets/mulher-suporte.png') }}" class="w-32 animated fadeInLeft delay-2s">
                        <img src="{{ asset('assets/homem-suporte.png') }}" class="w-32 animated fadeInRight delay-2s">
                    </div>
                    <form class="w-full max-w-md my-8 animated slideInUp delay-2s" enctype="application/x-www-form-urlencoded" method="POST"
                          action="{{ route('realizar-contato') }}">

                        {!! csrf_field() !!}

                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                <label class="block tracking-wide text-blue-light ps-b text-md mb-2"
                                       for="grid-first-name">
                                    Nome 🕺💃
                                </label>
                                <input name="name"
                                       class="{{ $errors->has('name') ? 'border-red' : '' }} shadow-inner appearance-none block w-full bg-grey-lighter text-grey-darker border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                       type="text"
                                       placeholder="Seu nome"
                                       value="{{ old('name') }}"
                                >
                                @if($errors->has('name'))
                                    <p class="text-red text-xs italic">{{ $errors->first('name') }}</p>
                                @endif
                            </div>
                            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                <label class="block tracking-wide text-blue-light ps-b text-md mb-2"
                                       for="grid-last-name">
                                    Email 📧
                                </label>
                                <input name="email"
                                       class="{{ $errors->has('email') ? 'border-red' : '' }} shadow-inner appearance-none block w-full bg-grey-lighter text-grey-darker border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                       type="text" placeholder="seu@email.aqui"
                                       value="{{ old('email') }}"
                                >
                                @if($errors->has('email'))
                                    <p class="text-red text-xs italic">{{ $errors->first('email') }}</p>
                                @endif
                            </div>
                            <div class="w-full md:w-1/3 px-3">
                                <label class="block tracking-wide text-blue-light ps-b text-md mb-2"
                                       for="grid-city">
                                    Telefone 📞
                                </label>
                                <input
                                    class="shadow-inner appearance-none block w-full bg-grey-lighter text-grey-darker border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                    id="phone"
                                    type="text"
                                    placeholder="(xx) 9 xxxx-xxxx"
                                    name="phone"
                                    value="{{ old('phone') }}"
                                >
                            </div>
                        </div>
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full px-3">
                                <label class="block tracking-wide text-blue-light ps-b text-md mb-2"
                                       for="grid-password">
                                    Fale a vontade 😃
                                </label>
                                <textarea
                                    rows="5"
                                    name="text"

                                    class="{{ $errors->has('text') ? 'border-red' : '' }} shadow-inner appearance-none block w-full bg-grey-lighter text-grey-darker border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white">{{ old('text') }}</textarea>
                                @if($errors->has('text'))
                                    <p class="text-red text-xs italic">{{ $errors->first('text') }}</p>
                                @endif
                            </div>
                        </div>
                        <div class="flex flex-wrap -mx-3 mb-2">
                            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                <label class="block tracking-wide text-blue-light ps-b text-md mb-2"
                                       for="grid-state">
                                    Como nos achou? 👀🔎
                                </label>
                                <div class="relative">
                                    <select
                                        name="refer"
                                        class="block shadow-inner appearance-none block w-full bg-grey-lighter text-grey-darker border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                        id="grid-state"
                                    >
                                        <option {{ old('refer') === 'Google' ? 'selected' : ''}}>Google</option>
                                        <option {{ old('refer') === 'Facebook' ? 'selected' : ''}}>Facebook</option>
                                        <option {{ old('refer') === 'Instagram' ? 'selected' : ''}}>Instagram</option>
                                        <option {{ old('refer') === 'Indicação Pessoal' ? 'selected' : ''}}>Indicação
                                            Pessoal
                                        </option>
                                        <option {{ old('refer') === 'Já nos conhecia' ? 'selected' : ''}}>Já nos
                                            conhecia
                                        </option>
                                    </select>
                                    <div
                                        class="pointer-events-none absolute pin-y pin-r flex items-center px-2 text-grey-darker">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 20 20">
                                            <path
                                                d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                <label class="block tracking-wide text-blue-light ps-b text-md mb-2"
                                       for="grid-city">
                                    Convidados Aprox. 🥳
                                </label>
                                <input
                                    class="shadow-inner appearance-none block w-full bg-grey-lighter text-grey-darker border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                    id="convidados"
                                    type="number"
                                    placeholder="50"
                                    name="convidados"
                                    value="{{ old('convidados') }}"
                                >
                            </div>
                            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                <label class="block tracking-wide text-blue-light ps-b text-md mb-2"
                                       for="grid-zip">
                                    Data desejada 🗓🎯
                                </label>
                                <input
                                    name="date"
                                    class="shadow-inner appearance-none block w-full bg-grey-lighter text-grey-darker border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                    id="date" type="text" placeholder="{{ \Carbon\Carbon::today()->format('d/m/Y') }}">
                            </div>
                            <button class="bg-green text-white mx-auto shadow-lg py-3 px-6 hover:bg-blue rounded mt-3 mx-3">
                                Enviar
                                <i class="fa fa-send-o"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
