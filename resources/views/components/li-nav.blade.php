@props(['value'])

<li class="relative before:block before:inset-0 before:inset-x-0 before:inset-y-0 before:absolute before:-z-10 before:transform before:scale-x-0
                hover:transform hover:scale-x-100 before:hover:transform before:hover:scale-x-100  before:origin-bottom-right before:hover:origin-bottom-left before:bg-red-900
                 transition before:transition before:duration-700 duration-700 ">
    <a href="#{{ $value }}"
       class="block text-2xl py-2 pl-3 pr-4 text-white 4xl:text-4xl">{{ $value }}</a>
</li>