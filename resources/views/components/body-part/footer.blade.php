<footer class="bg-black shadow text-white py-8 border-t-8 border-red-900">
    <div id="ScrollPos"></div>
    <div class="w-full mx-auto max-w-screen-xl p-4 md:flex md:items-center md:justify-between">
        <span class="text-sm 4xl:text-xl text-white sm:text-center">
            © 2023
            <a href="https://redscorpio4.com/" class="font-medium text-red-900 text-sm hover:underline">Redscorpio4</a>
        </span>
        <span class="text-sm text-white 4xl:text-xl sm:text-center">
            {{ __('redscorpio4.footer.created') }}
            <a class="font-medium text-blue-600 dark:text-blue-500 text-sm hover:underline" href="https://mestdagh-christophe.ovh/">Christophe Mestdagh</a><br>
            {{ __('redscorpio4.footer.design') }}
            <a class="font-medium text-blue-600 dark:text-blue-500 text-sm hover:underline" href="https://www.alois-patoor.ovh/">Aloïs Patoor</a>
        </span>

        <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-white sm:mt-0">
            <x-li-footer :value="__('redscorpio4.navbar.about')"></x-li-footer>
            <x-li-footer :value="__('redscorpio4.navbar.last')"></x-li-footer>
            <x-li-footer :value="__('redscorpio4.navbar.remixes')"></x-li-footer>
            <x-li-footer :value="__('redscorpio4.navbar.original')"></x-li-footer>
        </ul>
    </div>
</footer>