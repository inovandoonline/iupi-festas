@extends('site.template.layout')

@section('css')
    <link rel="stylesheet" href="{{ asset('packages/lightbox/css/lightbox.min.css') }}">
@endsection

@section('js')
    <script src="{{ asset('js/jquery.lazy.min.js') }}"></script>
    <script src="{{ asset('packages/lightbox/js/lightbox.min.js') }}"></script>
    <script>
        $(() => {
            $('body').addClass('pattern-bg-2');
            $('.lazy').lazy();
        })
    </script>
@endsection

@section('content')
    <div class="w-full bg-cover bg-no-repeat md:bg-fixed md:bg-bottom"
         style="background-image: url('/{{ $tema->image }}'); height: 20rem">
    </div>
    <div class="container mx-auto -mt-10 mb-10">
        <div class="bg-white rounded-lg shadow-md py-6 px-4 md:mx-3 md:mx-auto w-full">
            <h1 class="w-full text-center text-4xl ps-b text-blue-light">Evento: {{ $tema->title }}</h1>
            <div class="mt-6">
                <div class="max-w-md text-center mx-auto text-grey-dark leading-normal pb-4">
                    {!! $tema->text !!}
                </div>
                <div class="flex flex-row flex-wrap justify-around border-t pt-4">
                    @foreach($tema->fotos as $img)
                        <a class="pb-2 px-1 w-1/3 lazy" href="{{ asset($img->imagem) }}" data-lightbox="fotos">
                            <div class="h-24 md:h-48 bg-cover bg-no-repeat shadow-md"
                                 style="background-image: url('/{{$img->imagem}}')"></div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
