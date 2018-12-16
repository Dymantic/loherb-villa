<div class="fixed pin-t w-full flex justify-between items-center h-12 px-4 main-nav bg-green-main hover:bg-green-main main-nav">
    <div>
        <a href="{{ localUrl("/") }}" tabindex="1" class="flex items-center h-12 ml-4 text-cream-light hover:text-gold focus:text-gold">
            @include('svgs.logos.simple')
        </a>
    </div>
    <nav class="flex justify-end items-stretch font-sans h-12 nav-list bg-green-main md:bg-transparent">

        <div class="nav-link-box flex items-center my-2 md:my-0">
            <a tabindex="2" class="flex items-center nav-link text-white" href="{{ localUrl('/about') }}">{{ trans('navbar.about') }}</a>
        </div>
        <div class="flex items-start md:items-center rooms-nav" tabindex="3">
            <span  class="text-white">
                <span class="nav-link-box"><a href="{{ localUrl('/rooms') }}" class="nav-link text-white mr-0">{{ trans('navbar.rooms') }}</a></span>
                <svg class="fill-current align-middle hidden md:inline"
                     xmlns="http://www.w3.org/2000/svg"
                     viewBox="0 0 24 24" width="20" height="20">
                    <path d="M15.3 9.3a1 1 0 0 1 1.4 1.4l-4 4a1 1 0 0 1-1.4 0l-4-4a1 1 0 0 1 1.4-1.4l3.3 3.29 3.3-3.3z"/>
                </svg>
            </span>
            <div class="room-nav-sub mt-4 md:mt-0 bg-cream-light absolute w-screen flex flex-col md:flex-row justify-center">
                <div class="md:w-48 pl-4 md:pl-0 mx-0 border-r border-brown-light my-0 md:my-4 flex justify-start md:items-center flex-col text-green-main">
                    <p class="uppercase mb-3 border-b border-brown-light tracking-wide hidden md:block">Economy</p>
                    <a class="nav-link font-heading text-sm hover:underline text-green-main  my-1" href="{{ localUrl("/rooms/rose") }}">Rose Room</a>
                    <a class="nav-link font-heading text-sm hover:underline text-green-main  my-1" href="{{ localUrl("/rooms/lily") }}">Lily Room</a>
                </div>
                <div class="md:w-48 pl-4 md:pl-0 mx-0 border-r border-brown-light my-0 md:my-4 flex justify-start md:items-center flex-col text-green-main">
                    <p class="uppercase mb-3 border-b border-brown-light tracking-wide hidden md:block">Luxury</p>
                    <a class="nav-link font-heading text-sm hover:underline text-green-main  my-1" href="{{ localUrl("/rooms/sunflower") }}">Sunflower</a>
                    <a class="nav-link font-heading text-sm hover:underline text-green-main  my-1" href="{{ localUrl("/rooms/orchid") }}">Orchid</a>
                </div>
                <div class="md:w-48 pl-4 md:pl-0 mx-0 border-r border-brown-light my-0 md:my-4 flex justify-start md:items-center flex-col text-green-main">
                    <p class="uppercase mb-3 border-b border-brown-light tracking-wide hidden md:block">VIP</p>
                    <a class="nav-link font-heading text-sm hover:underline text-green-main  my-1" href="{{ localUrl("/rooms/plum") }}">Plum</a>
                    <a class="nav-link font-heading text-sm hover:underline text-green-main  my-1" href="{{ localUrl("/rooms/frangipani") }}">Frangipani</a>
                </div>
                <div class="md:w-48 pl-4 md:pl-0 mx-0 my-0 md:my-4 flex justify-start md:items-center flex-col text-green-main">
                    <p class="uppercase mb-3 border-b border-brown-light tracking-wide hidden md:block">Villa</p>
                    <a class="nav-link font-heading text-sm hover:underline text-green-main  my-1" href="{{ localUrl("/rooms/villa") }}">Island Villa</a>
                </div>
            </div>
        </div>
        <div class="nav-link-box bookings-link-box flex items-center my-2 md:my-0">
            <a class="flex items-center nav-link text-gold" tabindex="4" href="{{ localUrl('/book') }}">{{ trans('navbar.bookings') }}</a>
        </div>
        <div class="nav-link-box flex items-center my-2 md:my-0">
            <a class="flex items-center nav-link text-white" tabindex="5" href="{{ localUrl('/journal') }}">{{ trans('navbar.journal') }}</a>
        </div>
        <div class="nav-link-box flex items-center my-2 md:my-0">
            <a class="flex items-center nav-link text-white" tabindex="5" href="{{ localUrl('/contact') }}">{{ trans('navbar.contact') }}</a>
        </div>
        <div class="nav-link-box flex items-center my-2 md:my-0">
            <a class="flex items-center nav-link text-white" tabindex="6" href="{{ transUrl(Request::path()) }}">{{ trans('navbar.lang') }}</a>
        </div>
    </nav>
    <div class="md:hidden" id="nav-trigger">
        <span class="text-gold">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" class="fill-current"><path d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"/></svg>
        </span>
    </div>
</div>