<div class="my-3 mx-2 shadow-lg rounded overflow-hidden">
    <img class="w-full" src="{{ asset($tema->image) }}" alt="{{ $tema->title }}">
    <div class="px-4 py-6 bg-grey-lightest">
        <div class="ps-b text-4xl mb-2 text-blue">
            {{ $tema->title }}
        </div>
        <p>
            {!! $tema->text !!}
        </p>
        <a href="{{ route('view-tema', $tema->slug) }}">
            <span class="
            mt-6
            px-3
            py-1
            mr-2
            inline-block
            rounded-full
            bg-grey-light
            hover:bg-pink
            ps-b
            text-grey-darker
            hover:text-white
            text-sm
            shadow-md
            ">
                <i class="fa fa-search"></i>
                Visualizar
            </span>
        </a>
    </div>
</div>
