@props(['value', 'name'])

<div class="duration-200 ease-linear" data-carousel-item>
    <iframe class="3xl:w-[500px] 4xl:w-[600px] 4xl:h-[1200px] block mx-auto h-[600px] lg:h-[870px]" src="{{ $name}}"
            seamless>
        <a href="{{ $value }}"></a>
    </iframe>
</div>