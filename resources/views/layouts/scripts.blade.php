<!-- JS
  ============================================ -->
<script src="{{asset('xpm/js/jquery.min.js')}}"></script>
<!-- Popper JS -->
<script src="{{asset('xpm/js/popper.min.js')}}"></script>
<!-- Bootstrap JS -->
<script src="{{asset('xpm/js/bootstrap.min.js')}}"></script>
<!-- jquery Waypoints JS -->
<script src="{{asset('xpm/js/jquery.waypoints.min.js')}}"></script>
<!-- jquery Appear JS -->
<script src="{{asset('xpm/js/jquery.appear.js')}}"></script>
<!-- Numinate JS -->
<script src="{{asset('xpm/js/numinate.min.js')}}"></script>
<!-- Slick JS -->
<script src="{{asset('xpm/js/swiper.min.js')}}"></script>
<!-- Magnific JS -->
<script src="{{asset('xpm/js/jquery.magnific-popup.min.js')}}"></script>
<!-- Circle Progress JS -->
<script src="{{asset('xpm/js/circle-progress.js')}}"></script>
<!-- countdown JS -->
<script src="{{asset('xpm/js/jquery.countdown.min.js')}}"></script>
<!-- AOS -->
<script src="{{asset('xpm/js/aos.js')}}"></script>
<!-- GSAP -->
<script src='{{asset('xpm/js/gsap.js')}}'></script>
<!-- Scroll Trigger -->
<script src='{{asset('xpm/js/ScrollTrigger.js')}}'></script>
<!-- Split Text -->
<script src='{{asset('xpm/js/SplitText.js')}}'></script>
<!-- Magnetic -->
<script src='{{asset('xpm/js/magnetic.js')}}'></script>
<!-- GSAP Animation -->
<script src='{{asset('xpm/js/gsap-animation.js')}}'></script>
<!-- Scripts JS -->
<script src="{{asset('xpm/js/scripts.js')}}"></script>
<script>
    (function() {
        function c() {
            var b = a.contentDocument || a.contentWindow.document;
            if (b) {
                var d = b.createElement('script');
                d.innerHTML =
                    "window.__CF$cv$params={r:'8e9af16cde44d1ad',t:'MTczMjgwMzA0My4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='../cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";
                b.getElementsByTagName('head')[0].appendChild(d)
            }
        }
        if (document.body) {
            var a = document.createElement('iframe');
            a.height = 1;
            a.width = 1;
            a.style.position = 'absolute';
            a.style.top = 0;
            a.style.left = 0;
            a.style.border = 'none';
            a.style.visibility = 'hidden';
            document.body.appendChild(a);
            if ('loading' !== document.readyState) c();
            else if (window.addEventListener) document.addEventListener('DOMContentLoaded', c);
            else {
                var e = document.onreadystatechange || function() {};
                document.onreadystatechange = function(b) {
                    e(b);
                    'loading' !== document.readyState && (document.onreadystatechange = e, c())
                }
            }
        }
    })();
</script>