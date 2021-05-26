<div class="fixed top-0 left-0 w-full flex justify-between items-center h-12 px-4 main-nav bg-green-main hover:bg-green-main main-nav">
    <div>
        <a href="{{ localUrl("/") }}"
           tabindex="1"
           class="flex items-center h-12 ml-4 text-cream-light hover:text-gold focus:text-gold">
            @include('svgs.logos.simple')
        </a>
    </div>
    <nav class="flex justify-end items-stretch type-a1 h-full lg:h-12 overflow-y-auto nav-list bg-green-main lg:bg-transparent pb-20 lg:pb-0">

        <div class="nav-link-box flex items-center my-2 lg:my-0">
            <a tabindex="2"
               class="flex items-center nav-link text-white"
               href="{{ localUrl('/about') }}">{{ trans('navbar.about') }}</a>
        </div>
        <div class="flex items-start lg:items-center rooms-nav focus:outline-none cursor-pointer"
             tabindex="3">
            <span class="text-white rooms-panel-trigger">
                <span class="nav-link-box"><span class="nav-link rooms-link text-white mr-0">{{ trans('navbar.rooms') }}</span></span>
                <svg class="fill-current align-middle inline -ml-4 hidden lg:inline"
                     xmlns="http://www.w3.org/2000/svg"
                     viewBox="0 0 24 24"
                     width="20"
                     height="20">
                    <path d="M15.3 9.3a1 1 0 0 1 1.4 1.4l-4 4a1 1 0 0 1-1.4 0l-4-4a1 1 0 0 1 1.4-1.4l3.3 3.29 3.3-3.3z"/>
                </svg>
            </span>
            <div class="lg:hidden bg-cream-light w-full my-4 py-4 px-6">
                <div class="subnav-trigger flex items-center border-b border-brown-dark mb-3 pt-2 pb-3" data-opens-subnav="flower">
                    @include('svgs.buildings.flower', ['classes' => 'text-green-main h-5 mr-4'])
                    <p class="type-a1 flex-1 text-green-main uppercase">{{ trans('rooms.buildings.flower') }}</p>
                    <p class="type-a1 text-green-main">&rarr;</p>
                </div>
                <div class="subnav-trigger flex items-center border-b border-brown-dark mb-3 pt-2 pb-3" data-opens-subnav="tree">
                    @include('svgs.buildings.tree', ['classes' => 'text-green-main h-5 mr-4'])
                    <p class="type-a1 flex-1 text-green-main uppercase">{{ trans('rooms.buildings.tree') }}</p>
                    <p class="type-a1 text-green-main">&rarr;</p>
                </div>
                <div class="subnav-trigger flex items-center border-b border-brown-dark mb-3 pt-2 pb-3" data-opens-subnav="aqua">
                    @include('svgs.buildings.aqua', ['classes' => 'text-green-main h-5 mr-4'])
                    <p class="type-a1 flex-1 text-green-main uppercase">{{ trans('rooms.buildings.aqua') }}</p>
                    <p class="type-a1 text-green-main">&rarr;</p>
                </div>
                <div class="mt-20 text-center">
                    <a href="{{ localUrl('/buildings') }}" class="type-a1 text-green-main hover:text-green-mid">{{ trans('navbar.buildings_page') }} &rarr;</a>
                    <div class="text-center mt-6">
                        <a href="{{ localUrl('/rooms') }}"
                           class="inline-button btn-green-ghost">{{ trans('navbar.see_all_rooms') }}</a>
                    </div>
                </div>

            </div>
        </div>
        <div class="nav-link-box bookings-link-box flex items-center my-2 lg:my-0">
            <a class="flex items-center nav-link text-gold"
               tabindex="4"
               href="{{ localUrl('/book') }}">{{ trans('navbar.bookings') }}</a>
        </div>
        <div class="nav-link-box flex items-center my-2 lg:my-0">
            <a class="flex items-center nav-link text-white"
               tabindex="5"
               href="{{ localUrl('/journal') }}">{{ trans('navbar.journal') }}</a>
        </div>
        <div class="nav-link-box flex items-center my-2 lg:my-0">
            <a class="flex items-center nav-link text-white"
               tabindex="5"
               href="{{ localUrl('/contact') }}">{{ trans('navbar.contact') }}</a>
        </div>
        <div class="nav-link-box flex items-center my-2 lg:my-0">
            <a class="flex items-center nav-link text-white"
               tabindex="6"
               href="{{ transUrl(Request::path()) }}">{{ trans('navbar.lang') }}</a>
        </div>
    </nav>
    <button class="lg:hidden focus:outline-none"
         id="nav-trigger">
        <span class="text-gold flex">
            <svg xmlns="http://www.w3.org/2000/svg"
                 viewBox="0 0 24 24"
                 width="24"
                 height="24"
                 class="fill-current nav-trigger-open"><path d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"/></svg>
            <svg viewBox="0 0 100 100" class="stroke-current h-6 nav-trigger-close">
                <path d="M 10 10 L 90 90 M 90 10 L 10 90" stroke-width="4"></path>
            </svg>
        </span>

    </button>

    <x-rooms-mobile-nav></x-rooms-mobile-nav>
    <x-rooms-nav-panel></x-rooms-nav-panel>

</div>

