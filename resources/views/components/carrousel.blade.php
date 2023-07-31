<div id="animation-carousel" class="max-xl:relative absolute  w-full pt-10 2xl:pt-5" data-carousel="static">
    <div class="absolute z-30 flex lg:hidden space-x-3  p-1 rounded my-4 bg-black/50 -translate-x-1/2 left-1/2">
        <button type="button" class="w-4 h-4 rounded-full" aria-current="true" aria-label="Slide 1"
                data-carousel-slide-to="0"></button>
        <button type="button" class="w-4 h-4  rounded-full" aria-current="false" aria-label="Slide 2"
                data-carousel-slide-to="1"></button>
        <button type="button" class="w-4 h-4  rounded-full" aria-current="false" aria-label="Slide 3"
                data-carousel-slide-to="2"></button>
        <button type="button" class="w-4 h-4  rounded-full" aria-current="false" aria-label="Slide 4"
                data-carousel-slide-to="3"></button>
        <button type="button" class="w-4 h-4 rounded-full" aria-current="false" aria-label="Slide 5"
                data-carousel-slide-to="4"></button>
    </div>
    <!-- Carousel wrapper -->
    <div class="relative h-56 max-lg:w-full overflow-hidden rounded-lg  3xl:h-[827px] 2xl:h-[715px] h-[605px] 4xl:h-[1100px]">
        <!-- Item 1 -->
        <x-div-iframe :value="__('https://redscorpio4.bandcamp.com/album/steel-darkness')"
                      :name="__('https://bandcamp.com/EmbeddedPlayer/album=3921174629/size=large/bgcol=333333/linkcol=e32c14/transparent=false/')"></x-div-iframe>
        <!-- Item 2 -->
        <x-div-iframe :value="__('https://redscorpio4.bandcamp.com/album/child-of-the-90s')"
                      :name="__('https://bandcamp.com/EmbeddedPlayer/album=2419035127/size=large/bgcol=333333/linkcol=e32c14/transparent=false/')"></x-div-iframe>
        <!-- Item 3 -->
        <x-div-iframe :value="__('https://redscorpio4.bandcamp.com/album/steel-poison')"
                      :name="__('https://bandcamp.com/EmbeddedPlayer/album=2545169762/size=large/bgcol=333333/linkcol=e32c14/transparent=false/')"></x-div-iframe>
        <!-- Item 4 -->
        <x-div-iframe :value="__('https://redscorpio4.bandcamp.com/album/desillusion')"
                      :name="__('https://bandcamp.com/EmbeddedPlayer/album=83631677/size=large/bgcol=333333/linkcol=e32c14/transparent=false/')"></x-div-iframe>
        <!-- Item 5 -->
        <x-div-iframe :value="__('https://redscorpio4.bandcamp.com/album/blue')"
                      :name="__('https://bandcamp.com/EmbeddedPlayer/album=2576687762/size=large/bgcol=333333/linkcol=e32c14/transparent=false/')"></x-div-iframe>
    </div>
    <!-- Slider controls -->
    <button type="button" class="absolute max-lg:hidden top-0 left-52 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-28 sm:h-28 bg-black/30 group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-red-900 group-focus:outline-none">
            <svg aria-hidden="true" class="w-5 h-5 text-red-900 sm:w-24 sm:h-24 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button type="button" class="absolute max-lg:hidden top-0 right-52 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-28 sm:h-28 bg-black/30  group-hover:bg-white/50  group-focus:ring-4 group-focus:ring-red-900 group-focus:outline-none">
            <svg aria-hidden="true" class="w-5 h-5 text-red-900 sm:w-24 sm:h-24" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            <span class="sr-only">Next</span>
        </span>
    </button>
</div>