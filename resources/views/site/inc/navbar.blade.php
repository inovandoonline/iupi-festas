<div class="flex flex-wrap w-screen sticky pin-t bg-white shadow z-20">
    <div class="h-3 bg-aqua w-screen"></div>
    <div id="navbutton" class="md:hidden w-1/6 text-center my-auto" onclick="toggleNav()">
        <i class="fa fa-navicon py-6"></i>
    </div>
    <div class="w-1/4 my-auto">
        <img src="{{ asset('assets/logo.png') }}" class="md:ml-32 md:py-3" alt="logo" width="120px">
    </div>
    <div class="flex-1 text-white md:text-right md:px-32 my-auto">
        <a href="{{ route('inicio') }}" class="navg ps-b text-md hidden md:inline-block text-grey-dark mx-4 hover:text-blue hover:border-b hover:border-grey">Início</a>
{{--        <a href="{{ route('temas') }}" class="navg ps-b text-md hidden md:inline-block text-grey-dark mx-4 hover:text-pink hover:border-b hover:border-grey">Temas</a>--}}
{{--        <a href="#" class="navg ps-b text-md hidden md:inline-block text-grey-dark mx-4 hover:text-green hover:border-b hover:border-grey">Brinquedos</a>--}}
        <a href="{{ route('pacotes') }}" class="navg ps-b text-md hidden md:inline-block text-grey-dark mx-4 hover:text-indigo hover:border-b hover:border-grey">Pacotes</a>
        <a href="{{ route('fale-conosco') }}" class="navg ps-b text-md hidden md:inline-block text-grey-dark mx-4 hover:text-red hover:border-b hover:border-grey">Fale Conosco</a>
    </div>
</div>
<div id="collapsed" class="h-screen w-1/2 md:w-1/6 hidden pattern-bg-2 shadow-lg text-center fixed z-10 py-5">
    <div class="flex flex-col flex-wrap">
        {{--<div class="flex-1 text-center">--}}
            {{--<img src="{{ asset('assets/logo.png') }}" class="py-3" alt="logo" width="120px">--}}
        {{--</div>--}}
        <div class="flex-1 py-1">
            <a data-color="blue" href="{{ route('inicio') }}" class="navg ps-b text-md inline-block mx-4 text-xl text-blue">Início</a>
        </div>
        <div class="flex-1 py-1">
            <a data-color="pink" href="{{ route('temas') }}" class="navg ps-b text-md inline-block mx-4 text-xl text-pink">Temas</a>
        </div>
        <div class="flex-1 py-1">
            <a data-color="green" href="#" class="navg ps-b text-md inline-block mx-4 text-xl text-green">Brinquedos</a>
        </div>
        <div class="flex-1 py-1">
            <a data-color="indigo" href="{{ route('pacotes') }}" class="navg ps-b text-md inline-block mx-4 text-xl text-indigo">Pacotes</a>
        </div>
        <div class="flex-1 py-1">
            <a data-color="red" href="{{ route('fale-conosco') }}" class="navg ps-b text-md inline-block mx-4 text-xl text-red">Fale Conosco</a>
        </div>
    </div>
</div>
