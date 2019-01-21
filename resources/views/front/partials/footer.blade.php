<footer class="p-8 pt-12 footer">
    <div class="text-center">
        <img src="/images/logos/villa_logo.svg"
             alt="Loherb Villa logo"
             width="60px">
    </div>
    <div class="max-w-xl mx-auto flex flex-col md:flex-row justify-between">
        <div class="hidden md:block">
            <p class="text-center">
                <a class="font-sans tracking-wide uppercase no-underline text-white hover:text-gold"
                   href="{{ localUrl('/contact') }}">{{ trans('footer.links.contact') }}</a>
            </p>
            <p class="text-center">
                <a class="font-sans tracking-wide uppercase no-underline text-white hover:text-gold"
                   href="{{ localUrl('/about') }}">{{ trans('footer.links.about') }}</a>
            </p>
            <p class="text-center">
                <a class="font-sans tracking-wide uppercase no-underline text-white hover:text-gold"
                   href="{{ localUrl('/rooms') }}">{{ trans('footer.links.rooms') }}</a>
            </p>
            <p class="text-center">
                <a class="font-sans tracking-wide uppercase no-underline text-white hover:text-gold"
                   href="{{ localUrl('/journal') }}">{{ trans('footer.links.journal') }}</a>
            </p>
        </div>
        <div>
            <p class="text-center">
                <a class="font-sans tracking-wide uppercase no-underline text-gold hover:underline"
                   href="">{{ trans('footer.links.book') }}</a>
            </p>
            <p class="text-center">
                <a class="font-sans tracking-wide no-underline text-white"
                   href="">service@loherb.com.tw</a>
            </p>
            <p class="text-center">
                <a class="font-sans tracking-wide uppercase no-underline text-white"
                   href="">+886-3-959-5685</a>
            </p>
            <p class="text-center font-sans tracking-wide uppercase text-white">{{ trans('footer.address_line_one') }}</p>
            <p class="text-center font-sans tracking-wide uppercase text-white">{{ trans('footer.address_line_two') }}</p>
            <div>
                <p class="text-center font-sans tracking-wide text-white mt-12 md:mt-4 mb-2">{{ trans('footer.social.heading') }}</p>
                <div class="flex justify-center">
                    <a class="text-white hover:text-gold mx-4"
                       href="">@include('svgs.social.twitter')</a>
                    <a class="text-white hover:text-gold mx-4"
                       href="">@include('svgs.social.linkedin')</a>
                    <a class="text-white hover:text-gold mx-4"
                       href="">@include('svgs.social.facebook')</a>
                    <a class="text-white hover:text-gold mx-4"
                       href="">@include('svgs.social.instagram')</a>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center mt-8">
        <img src="/images/logos/loherb_logo_full.svg"
             alt="Loherb Villa logo"
             width="30px"
             class="mb-2 block mx-auto">
        <p class="text-xs reviews-text text-white">{{ trans('footer.close-line') }}</p>
    </div>
    <div class="mt-8 flex flex-col md:flex-row items-center justify-center">
        <a href=""
           class="text-white hover:text-gold font-sans tracking-wide uppercase no-underline mx-8 text-sm">{{ trans('footer.sites.biotech') }}</a>
        <a href=""
           class="text-white hover:text-gold font-sans tracking-wide uppercase no-underline mx-8 text-sm">{{ trans('footer.sites.estate') }}</a>
        <a href=""
           class="text-white hover:text-gold font-sans tracking-wide uppercase no-underline mx-8 text-sm">{{ trans('footer.sites.villa') }}</a>
        <a href=""
           class="text-white hover:text-gold font-sans tracking-wide uppercase no-underline mx-8 text-sm">{{ trans('footer.sites.cuisine') }}</a>
    </div>
</footer>