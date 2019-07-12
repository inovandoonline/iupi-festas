@extends('site.template.layout')

@section('js')
    <script>
        $(() => {
            $('body').addClass('pattern-bg-2')
        })
    </script>
@endsection

@section('content')
    <div class="w-full bg-cover bg-no-repeat md:bg-fixed md:bg-bottom"
         style="background-image: url('/{{ $pac->image }}'); height: 20rem"></div>
    <div class="container mx-auto -mt-10 mb-10">
        <div class="flex flex-wrap flex-row">
            <div class="bg-white rounded-lg shadow-lg py-6 px-4 mx-3 md:mx-auto w-full">
                <h1 class="w-full text-center text-3xl ps-b text-blue-light">Pacote {{ $pac->title }}</h1>
                <div class="mt-6">
                    <div class="md:mx-32">
                        <div class="lg:mx-20 lg:text-xl">
                            <div class="text-center pn text-grey-darkest mb-8">
                                {{ $pac->chamada }}
                            </div>
                            {!! $pac->text !!}
                            <div class="mt-10">
                                <h3 class="text-center text-3xl ps-b text-green">E muito mais!</h3>
                                <h4 class="text-center ps-b text-xl mt-5 hover:bg-pink bg-aqua rounded-full shadow-md p-5">
                                    <a target="_blank" href="{{ route('fale-conosco') }}" class="text-white">
                                        Peça já um orçamento 🥳
                                    </a>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
