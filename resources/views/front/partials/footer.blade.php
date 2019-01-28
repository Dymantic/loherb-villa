<footer class="px-8 pt-12 footer">
    <div class="text-center mb-8">
        <img src="/images/logos/villa_logo.svg"
             alt="Loherb Villa logo"
             width="60px">
    </div>
    <div class="max-w-xl mx-auto flex flex-col md:flex-row justify-between">
        <div class="flex flex-col items-center w-full md:w-48 loherb-group mt-12 md:mt-0">
            <p class="font-sans text-white uppercase mb-2 tracking-wide">{{ trans('footer.sites.heading') }}</p>
            <a href=""
               class="text-white hover:text-gold font-sans tracking-wide uppercase no-underline text-base">{{ trans('footer.sites.biotech') }}</a>
            <a href=""
               class="text-white hover:text-gold font-sans tracking-wide uppercase no-underline text-base">{{ trans('footer.sites.estate') }}</a>
            <a href=""
               class="text-white hover:text-gold font-sans tracking-wide uppercase no-underline text-base">{{ trans('footer.sites.villa') }}</a>
            <a href=""
               class="text-white hover:text-gold font-sans tracking-wide uppercase no-underline text-base">{{ trans('footer.sites.cuisine') }}</a>
        </div>
        <div class="flex flex-col items-center w-full md:w-48">
            <div>
                <p class="text-center font-sans uppercase tracking-wide text-white mb-4">{{ trans('footer.social.heading') }}</p>
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

            <p class="text-center mt-12 mb-12 md:mb-0">
                <a class="font-sans tracking-wide uppercase no-underline text-gold hover:underline"
                   href="">{{ trans('footer.links.book') }}</a>
            </p>
        </div>
        <div class="flex flex-col items-center w-full md:w-48">
            <p class="font-sans text-white tracking-wide uppercase mb-2">Contact</p>
                <a class="font-sans tracking-wide no-underline text-white text-base mb-2"
                   href="">service@loherb.com.tw</a>
                <a class="font-sans tracking-wide uppercase no-underline text-white text-base mb-2"
                   href="">+886-3-959-5685</a>
            <p class="text-center font-sans tracking-wide text-white text-base">{{ trans('footer.address_line_one') }}</p>
            <p class="text-center font-sans tracking-wide text-white text-base">{{ trans('footer.address_line_two') }}</p>

        </div>
    </div>
    <p class="px-4 text-center mt-20 font-heading text-sm text-white pb-2">
        &copy;All rights reserved {{ \Illuminate\Support\Carbon::now()->year }}. Brilliantly built by <a href="https://dymanticdesign.com" target="_blank" rel="nofollow noopener" class="hover:text-gold text-white no-underline">Dymantic Design</a>
    </p>
</footer>