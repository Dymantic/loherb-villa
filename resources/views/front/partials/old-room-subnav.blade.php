<div class="room-nav-sub absolute w-screen bg-cream-light">
    <div class="mt-4 md:mt-0 flex flex-col md:flex-row justify-center">
        <div class="md:w-48 pl-4 md:pl-0 mx-0 border-r border-brown-light my-0 md:my-4 flex justify-start md:items-center flex-col text-green-main">
            <p class="uppercase mb-3 border-b border-brown-light tracking-wide hidden md:block">{{ trans('navbar.room.economy') }}</p>
            <a class="nav-link font-heading text-sm hover:underline text-green-main  my-1"
               href="{{ localUrl("/rooms/rose") }}">{{ trans('navbar.room.rose') }}</a>
            <a class="nav-link font-heading text-sm hover:underline text-green-main  my-1"
               href="{{ localUrl("/rooms/lily") }}">{{ trans('navbar.room.lily') }}</a>
        </div>
        <div class="md:w-48 pl-4 md:pl-0 mx-0 border-r border-brown-light my-0 md:my-4 flex justify-start md:items-center flex-col text-green-main">
            <p class="uppercase mb-3 border-b border-brown-light tracking-wide hidden md:block">{{ trans('navbar.room.luxury') }}</p>
            <a class="nav-link font-heading text-sm hover:underline text-green-main  my-1"
               href="{{ localUrl("/rooms/sunflower") }}">{{ trans('navbar.room.sunflower') }}</a>
            <a class="nav-link font-heading text-sm hover:underline text-green-main  my-1"
               href="{{ localUrl("/rooms/orchid") }}">{{ trans('navbar.room.orchid') }}</a>
        </div>
        <div class="md:w-48 pl-4 md:pl-0 mx-0 border-r border-brown-light my-0 md:my-4 flex justify-start md:items-center flex-col text-green-main">
            <p class="uppercase mb-3 border-b border-brown-light tracking-wide hidden md:block">{{ trans('navbar.room.vip') }}</p>
            <a class="nav-link font-heading text-sm hover:underline text-green-main  my-1"
               href="{{ localUrl("/rooms/plum") }}">{{ trans('navbar.room.plum') }}</a>
        </div>
        <div class="md:w-48 pl-4 md:pl-0 mx-0 border-r border-brown-light my-0 md:my-4 flex justify-start md:items-center flex-col text-green-main">
            <p class="uppercase mb-3 border-b border-brown-light tracking-wide hidden md:block">{{ trans('navbar.room.duplex') }}</p>
            <a class="nav-link font-heading text-sm hover:underline text-green-main  my-1"
               href="{{ localUrl("/rooms/frangipani") }}">{{ trans('navbar.room.frangipani') }}</a>
        </div>
        <div class="md:w-48 pl-4 md:pl-0 mx-0 my-0 md:my-4 flex justify-start md:items-center flex-col text-green-main">
            <p class="uppercase mb-3 border-b border-brown-light tracking-wide hidden md:block">{{ trans('navbar.room.villa') }}</p>
            <a class="nav-link font-heading text-sm hover:underline text-green-main  my-1"
               href="{{ localUrl("/rooms/villa") }}">{{ trans('navbar.room.island') }}</a>
        </div>
    </div>
    <div class="py-8 flex justify-center items-center">
        <a href="{{ localUrl('/rooms') }}"
           class="text-link text-green-main no-underline hover:text-hover-green">{{ trans('navbar.view-rooms') }} &rarr;</a>
    </div>
</div>

</div>
