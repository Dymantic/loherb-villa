<script>
    window.fbAsyncInit = function() {
        FB.init({
            appId            : '{{ config('facebook.app_id') }}',
            autoLogAppEvents : true,
            xfbml            : true,
            version          : 'v3.2'
        });
    };
    function loadFBChat() {
        (function(d, s, id){
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) {return;}
            js = d.createElement(s); js.id = id;
            js.src = "https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
        window.removeEventListener('scroll', loadFBChat);
        window.removeEventListener('click', loadFBChat);
        window.removeEventListener('mouseover', loadFBChat);
    }
    window.addEventListener('scroll', loadFBChat);
    window.addEventListener('click', loadFBChat);
    window.addEventListener('mouseover', loadFBChat);
</script>
