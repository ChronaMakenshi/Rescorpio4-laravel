<button type="button" data-dropdown-toggle="language-dropdown-menu"
        class="inline-flex items-center font-medium justify-center ml-2 px-3 py-2 text-sm bg-white text-gray-900 rounded-lg cursor-pointer hover:bg-gray-100">
    <div class="inline-flex items-center">
        <img aria-hidden="true" class="h-3.5 w-3.5 rounded-full mr-2"
             src="/flags/svg/language-{{ app()->getLocale() }}.svg" alt="" srcset="">
        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
            @if($localeCode == app()->getLocale())
                {{ $properties['native'] }}
            @endif
        @endforeach
    </div>
</button>
<!-- Dropdown -->
<div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow"
     id="language-dropdown-menu">
    <ul class="py-2 font-medium" role="none">
        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
            <li>
                <a rel="alternate" hreflang="{{ $localeCode }}"
                   href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"
                   class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                   role="menuitem">
                    <div class="inline-flex items-center">
                        <img aria-hidden="true" class="h-3.5 w-3.5 rounded-full mr-2"
                             src="/flags/svg/language-{{ $localeCode }}.svg" alt="" srcset="">
                        {{ $properties['native'] }}
                    </div>
                </a>
            </li>
        @endforeach
    </ul>
</div>
