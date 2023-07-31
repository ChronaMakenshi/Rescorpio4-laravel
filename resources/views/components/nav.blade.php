<nav class="bg-neutral-800 py-5">
    <div class="max-w-full flex flex-wrap justify-around">
        <div class="flex flex-row-reverse items-center lg:order-2">
            <x-multi-language></x-multi-language>
            <x-button-image></x-button-image>
        </div>
        <div class="hidden w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-language-select">
            <ul class="flex flex-col font-normal text-center p-4 lg:p-0 mt-4 max-lg:bg-black lg:flex-row lg:space-x-2 lg:space-x-20 xl:space-x-40 lg:mt-0 lg:border-0">
                <x-li-nav :value="__('redscorpio4.navbar.about')"></x-li-nav>
                <x-li-nav :value="__('redscorpio4.navbar.last')"></x-li-nav>
                <x-li-nav :value="__('redscorpio4.navbar.remixes')"></x-li-nav>
                <x-li-nav :value="__('redscorpio4.navbar.original')"></x-li-nav>
                <x-li-nav :value="__('redscorpio4.navbar.contact')"></x-li-nav>
                <li class="md:hidden">
                    <div class="flex justify-center pt-4 md:pt-16">
                        <x-logo-social></x-logo-social>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
