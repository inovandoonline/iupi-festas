<div class="my-3 md:my-6 mx-2 shadow-lg rounded overflow-hidden">
    <div class="bg-no-repeat bg-center bg-cover" style="background-image: url({{$pac->image}});">
        <div class="img-hover text-center" onclick="showText(this)">
            <div class="px-6 py-4 pt-20">
                <div class="ps-b text-white text-4xl mb-2">
                    {{ $pac->title }}
                </div>
                <p class="pn text-grey-lightest md:px-24">
                    {!! $pac->chamada !!}
                </p>
            </div>
            <div class="p-6">
                <a href="{{ route('view-pacote', $pac->slug) }}">
                    <span class="my-1 inline-block bg-grey-light hover:bg-white rounded-full px-3 py-1 text-sm ps-b text-grey-darker mr-2 shadow-md">
                        <i class="fa fa-search"></i>
                        Visualizar
                    </span>
                </a>
            </div>
        </div>
    </div>
</div>
