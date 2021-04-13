<footer class="px-8 pt-12 footer">
    <div class="text-center mb-8">
        <img src="/images/logos/loherb_logo_simple.svg"
             alt="Loherb Villa logo"
             width="40px">
    </div>
    <div class="max-w-4xl mx-auto flex flex-col md:flex-row justify-between">
        <div class="flex flex-col items-center w-full md:w-48 loherb-group mt-12 md:mt-0">
            <p class="text-xl font-medium type-a1 text-white uppercase mb-2 tracking-wide">{{ trans('footer.sites.heading') }}</p>

            <a href="https://estate.loherb.com.tw"
               class="text-white hover:text-gold type-a1 tracking-wide uppercase no-underline text-base">{{ trans('footer.sites.estate') }}</a>
            <a href="https://villa.loherb.com.tw"
               class="text-white hover:text-gold type-a1 tracking-wide uppercase no-underline text-base">{{ trans('footer.sites.villa') }}</a>
            <a href="https://cuisine.loherb.com.tw"
               class="text-white hover:text-gold type-a1 tracking-wide uppercase no-underline text-base">{{ trans('footer.sites.cuisine') }}</a>
            <a href="https://patisserie.loherb.com.tw"
               class="text-white hover:text-gold type-a1 tracking-wide uppercase no-underline text-base">{{ trans('footer.sites.patisserie') }}</a>
        </div>
        <div class="flex flex-col items-center w-full md:w-48">
            <div>
                <p class="text-xl font-medium text-center type-a1 uppercase tracking-wide text-white mb-4">{{ trans('footer.social.heading') }}</p>
                <div class="flex justify-center">
                    {{--<a class="text-white hover:text-gold mx-4"--}}
                       {{--href="">@include('svgs.social.twitter')</a>--}}
                    {{--<a class="text-white hover:text-gold mx-4"--}}
                       {{--href="">@include('svgs.social.linkedin')</a>--}}
                    <a class="text-white hover:text-gold mx-4"
                       href="https://www.facebook.com/LOHERB.TW/">@include('svgs.social.facebook_block')</a>
                    <a class="text-white hover:text-gold mx-4"
                       href="https://www.instagram.com/loherb0301">@include('svgs.social.instagram')</a>
                    <a class="text-white hover:text-gold mx-4"
                       href="https://www.youtube.com/channel/UCACSw7tK8uMz8j-CFGa2NfQ">@include('svgs.social.youtube')</a>
                    <a class="text-white hover:text-gold mx-4" target="_blank" rel="noopener"
                       href="https://line.me/R/ti/p/%40xye4557v">@include('svgs.social.line')</a>
                </div>
            </div>

            <p class="text-center mt-12 mb-12 md:mb-0">
                <a class="type-a1 tracking-wide uppercase no-underline text-gold hover:underline"
                   href="{{ localUrl('/book') }}">{{ trans('footer.links.book') }}</a>
            </p>
        </div>
        <div class="flex flex-col items-center w-full md:w-48">
            <p class="text-xl font-medium type-a1 text-white tracking-wide uppercase mb-2">{{ trans('footer.contact_heading') }}</p>
                <a class="type-a1 tracking-wide no-underline text-white text-base mb-2"
                   href="mailto:service@loherb.com.tw">service@loherb.com.tw</a>
                <a class="type-a1 tracking-wide uppercase no-underline text-white text-base mb-2"
                   href="tel:+886-3-959-5685">+886-3-959-5685</a>
            <p class="text-center type-a1 tracking-wide text-white text-base">
                <a target="_blank" rel="noreferrer" href="https://goo.gl/maps/hruVS5xHAXjfkwqy6" class="no-underline text-white text-base">
                    {{ trans('footer.address_line_one') }}
                </a>

            </p>
            <p class="text-center type-a1 tracking-wide text-white text-base">{{ trans('footer.address_line_two') }}</p>

        </div>
    </div>
    <p class="px-4 text-center mt-20 font-sans text-sm text-white pb-2">
        &copy;All rights reserved {{ \Illuminate\Support\Carbon::now()->year }}. Brilliantly built by <a href="https://dymanticdesign.com" target="_blank" rel="nofollow noopener" class="hover:text-gold text-white no-underline">Dymantic Design</a>
    </p>
</footer>
