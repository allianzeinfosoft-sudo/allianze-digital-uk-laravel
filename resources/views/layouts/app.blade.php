<!DOCTYPE html>
<html lang="en">
@include('layouts.head')

<head>
    <style>
        body {
            visibility: hidden;
        }

        body.loaded {
            visibility: visible;
        }

        /* ── Glow backdrop ── */
        .loader-glow-bg {
            background: radial-gradient(circle, rgba(220, 38, 38, .13) 0%, transparent 70%);
            animation: loaderGlow 2s ease-in-out infinite;
        }

        @keyframes loaderGlow {

            0%,
            100% {
                transform: scale(1);
                opacity: .7;
            }

            50% {
                transform: scale(1.5);
                opacity: 1;
            }
        }

        /* ── Orbit rings ── */
        .loader-orbit,
        .loader-orbit2 {
            position: absolute;
            border-radius: 50%;
            border: 1.5px solid transparent;
        }

        .loader-orbit {
            inset: -14px;
            border-top-color: #dc2626;
            border-right-color: rgba(220, 38, 38, .3);
            animation: loaderSpin 1.4s linear infinite;
        }

        .loader-orbit2 {
            inset: -26px;
            border-width: 1px;
            border-bottom-color: rgba(220, 38, 38, .5);
            border-left-color: rgba(220, 38, 38, .2);
            animation: loaderSpin 2.2s linear infinite reverse;
        }

        @keyframes loaderSpin {
            to {
                transform: rotate(360deg);
            }
        }

        /* ── Logo pulse ── */
        .loader-logo-img {
            animation: loaderPulse 2s ease-in-out infinite;
            filter: drop-shadow(0 0 14px rgba(220, 38, 38, .7));
        }

        @keyframes loaderPulse {

            0%,
            100% {
                transform: scale(1);
                filter: drop-shadow(0 0 12px rgba(220, 38, 38, .6));
            }

            50% {
                transform: scale(1.08);
                filter: drop-shadow(0 0 28px rgba(220, 38, 38, 1));
            }
        }

        /* ── Dots ── */
        .loader-dot {
            display: inline-block;
            width: 7px;
            height: 7px;
            border-radius: 50%;
            background: #dc2626;
            animation: loaderDot 1.2s ease-in-out infinite;
        }

        @keyframes loaderDot {

            0%,
            100% {
                transform: scaleY(1);
                opacity: .35;
            }

            40% {
                transform: scaleY(1.8);
                opacity: 1;
            }
        }

        /* ── Label ── */
        .loader-label {
            color: rgba(255, 255, 255, .35);
            animation: loaderLabelFade 2s ease-in-out infinite;
        }

        @keyframes loaderLabelFade {

            0%,
            100% {
                opacity: .35;
            }

            50% {
                opacity: .7;
            }
        }

        /* ── Particles ── */
        .loader-particle {
            position: absolute;
            width: 3px;
            height: 3px;
            border-radius: 50%;
            background: #dc2626;
            opacity: 0;
            animation: loaderParticle var(--dur) var(--delay) ease-out infinite;
        }

        @keyframes loaderParticle {
            0% {
                transform: translate(0, 0) scale(0);
                opacity: 0;
            }

            20% {
                opacity: .8;
            }

            100% {
                transform: translate(var(--tx), var(--ty)) scale(.2);
                opacity: 0;
            }
        }

        /* ── Fade out ── */
        #page-loader {
            transition: opacity .6s ease, visibility .6s ease;
        }

        #page-loader.hidden {
            opacity: 0;
            visibility: hidden;
            pointer-events: none;
        }

        #page-content {
            display: none;
        }
    </style>

    <script>
        // Spawn particles
    (function () {
        var pts = [
            {tx:'-60px',ty:'-80px',dur:'2.8s',delay:'0s'},
            {tx:'70px', ty:'-90px',dur:'3.2s',delay:'.4s'},
            {tx:'-80px',ty:'50px', dur:'2.5s',delay:'.8s'},
            {tx:'90px', ty:'60px', dur:'3.5s',delay:'.2s'},
            {tx:'30px', ty:'-100px',dur:'2.9s',delay:'1s'},
            {tx:'-40px',ty:'90px', dur:'3.1s',delay:'.6s'},
            {tx:'110px',ty:'-30px',dur:'2.7s',delay:'1.3s'},
            {tx:'-100px',ty:'-10px',dur:'3.3s',delay:'.9s'},
            {tx:'50px', ty:'110px',dur:'3.0s',delay:'.3s'},
            {tx:'-70px',ty:'70px', dur:'2.6s',delay:'1.1s'},
        ];

        document.addEventListener('DOMContentLoaded', function () {
            document.body.classList.add('loaded');
            var wrap = document.getElementById('loader-particles');

            if (wrap) {
                pts.forEach(function(p) {
                    var el = document.createElement('span');
                    el.className = 'loader-particle';
                    el.style.cssText =
                        'left:50%;top:50%;--tx:'+p.tx+
                        ';--ty:'+p.ty+
                        ';--dur:'+p.dur+
                        ';--delay:'+p.delay;
                    wrap.appendChild(el);
                });
            }
        });
    })();

    // Hide loader and show content after page fully loads
    window.addEventListener('load', function () {
    setTimeout(function () {
        const loader = document.getElementById('page-loader');
        const content = document.getElementById('page-content');

        loader.classList.add('hidden');

        setTimeout(function () {
            loader.remove();
            content.style.display = 'block';
        }, 500);

    }, 500);
});
    </script>
</head>

<body>
    {{-- <div id="page-loader"
        class="fixed inset-0 z-50 flex items-center justify-center bg-white transition-opacity duration-500">
        <div class="flex flex-col items-center">
            <div class="w-16 h-16 border-4 border-gray-200 border-t-blue-600 rounded-full animate-spin"></div>
            <p class="mt-4 text-sm text-gray-700">Loading...</p>
        </div>
    </div> --}}

    <div id="page-loader" class="fixed inset-0 z-50 flex flex-col items-center justify-center ">

        {{-- Floating particles --}}
        <div id="loader-particles" class="absolute inset-0 pointer-events-none overflow-hidden"></div>

        {{-- Radial glow --}}
        <div class="loader-glow-bg absolute w-52 h-52 rounded-full pointer-events-none"></div>

        {{-- Logo with orbit rings --}}
        <div class="loader-logo-wrap relative w-28 h-28 flex items-center justify-center">
            <div class="loader-orbit"></div>
            <div class="loader-orbit2"></div>
            <img src="{{ asset('assets/logo-black.png') }}" alt="Logo"
                class="loader-logo-img relative z-10 w-20 h-20 object-contain" />
        </div>

        {{-- Bouncing dots --}}
        <div class="flex items-center gap-2 mt-7">
            <span class="loader-dot" style="animation-delay:0s"></span>
            <span class="loader-dot" style="animation-delay:.15s"></span>
            <span class="loader-dot" style="animation-delay:.30s"></span>
            <span class="loader-dot" style="animation-delay:.45s"></span>
        </div>

        {{-- Label --}}
        <p class="loader-label mt-4 text-xs uppercase tracking-widest">Loading</p>
    </div>





    <div id="page-content" style="display:none;">
        @include('layouts.navbar')
        @yield('content')
        @include('layouts.footer')
    </div>


    <!-- Footer Section: Multi-column layout with contact info and links -->

    <script src="{{ asset('script.js') }}"></script>
    @stack('scripts')
</body>

</html>