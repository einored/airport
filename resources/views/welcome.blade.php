<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        a {
            background-color: transparent
        }

        [hidden] {
            display: none
        }

        html {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            line-height: 1.5
        }

        *,
        :after,
        :before {
            box-sizing: border-box;
            border: 0 solid #e2e8f0
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        svg,
        video {
            display: block;
            vertical-align: middle
        }

        video {
            max-width: 100%;
            height: auto
        }

        .bg-white {
            --bg-opacity: 1;
            background-color: #fff;
            background-color: rgba(255, 255, 255, var(--bg-opacity))
        }

        .bg-gray-100 {
            --bg-opacity: 1;
            background-color: #f7fafc;
            background-color: rgba(247, 250, 252, var(--bg-opacity))
        }

        .border-gray-200 {
            --border-opacity: 1;
            border-color: #edf2f7;
            border-color: rgba(237, 242, 247, var(--border-opacity))
        }

        .border-t {
            border-top-width: 1px
        }

        .flex {
            display: flex
        }

        .grid {
            display: grid
        }

        .hidden {
            display: none
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .font-semibold {
            font-weight: 600
        }

        .h-5 {
            height: 1.25rem
        }

        .h-8 {
            height: 2rem
        }

        .h-16 {
            height: 4rem
        }

        .text-sm {
            font-size: .875rem
        }

        .text-lg {
            font-size: 1.125rem
        }

        .leading-7 {
            line-height: 1.75rem
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .ml-1 {
            margin-left: .25rem
        }

        .mt-2 {
            margin-top: .5rem
        }

        .mr-2 {
            margin-right: .5rem
        }

        .ml-2 {
            margin-left: .5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-8 {
            margin-top: 2rem
        }

        .ml-12 {
            margin-left: 3rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .max-w-6xl {
            max-width: 72rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .overflow-hidden {
            overflow: hidden
        }

        .p-6 {
            padding: 1.5rem
        }

        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .pt-8 {
            padding-top: 2rem
        }

        .fixed {
            position: fixed
        }

        .relative {
            position: relative
        }

        .top-0 {
            top: 0
        }

        .right-0 {
            right: 0
        }

        .shadow {
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06)
        }

        .text-center {
            text-align: center
        }

        .text-gray-200 {
            --text-opacity: 1;
            color: #edf2f7;
            color: rgba(237, 242, 247, var(--text-opacity))
        }

        .text-gray-300 {
            --text-opacity: 1;
            color: #e2e8f0;
            color: rgba(226, 232, 240, var(--text-opacity))
        }

        .text-gray-400 {
            --text-opacity: 1;
            color: #cbd5e0;
            color: rgba(203, 213, 224, var(--text-opacity))
        }

        .text-gray-500 {
            --text-opacity: 1;
            color: #a0aec0;
            color: rgba(160, 174, 192, var(--text-opacity))
        }

        .text-gray-600 {
            --text-opacity: 1;
            color: #718096;
            color: rgba(113, 128, 150, var(--text-opacity))
        }

        .text-gray-700 {
            --text-opacity: 1;
            color: #4a5568;
            color: rgba(74, 85, 104, var(--text-opacity))
        }

        .text-gray-900 {
            --text-opacity: 1;
            color: #1a202c;
            color: rgba(26, 32, 44, var(--text-opacity))
        }

        .underline {
            text-decoration: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .w-5 {
            width: 1.25rem
        }

        .w-8 {
            width: 2rem
        }

        .w-auto {
            width: auto
        }

        .grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr))
        }

        @media (min-width:640px) {
            .sm\:rounded-lg {
                border-radius: .5rem
            }

            .sm\:block {
                display: block
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-start {
                justify-content: flex-start
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:h-20 {
                height: 5rem
            }

            .sm\:ml-0 {
                margin-left: 0
            }

            .sm\:px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }

            .sm\:pt-0 {
                padding-top: 0
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width:768px) {
            .md\:border-t-0 {
                border-top-width: 0
            }

            .md\:border-l {
                border-left-width: 1px
            }

            .md\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width:1024px) {
            .lg\:px-8 {
                padding-left: 2rem;
                padding-right: 2rem
            }
        }

        @media (prefers-color-scheme:dark) {
            .dark\:bg-gray-800 {
                --bg-opacity: 1;
                background-color: #2d3748;
                background-color: rgba(45, 55, 72, var(--bg-opacity))
            }

            .dark\:bg-gray-900 {
                --bg-opacity: 1;
                background-color: #1a202c;
                background-color: rgba(26, 32, 44, var(--bg-opacity))
            }

            .dark\:border-gray-700 {
                --border-opacity: 1;
                border-color: #4a5568;
                border-color: rgba(74, 85, 104, var(--border-opacity))
            }

            .dark\:text-white {
                --text-opacity: 1;
                color: #fff;
                color: rgba(255, 255, 255, var(--text-opacity))
            }

            .dark\:text-gray-400 {
                --text-opacity: 1;
                color: #cbd5e0;
                color: rgba(203, 213, 224, var(--text-opacity))
            }

            .dark\:text-gray-500 {
                --tw-text-opacity: 1;
                color: #6b7280;
                color: rgba(107, 114, 128, var(--tw-text-opacity))
            }
        }

    </style>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

    </style>
</head>
<body class="antialiased">
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
            <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
            @else
            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
            @endif
            @endauth
        </div>
        @endif

        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                <svg version="1.1" id="Layer" x="0px" y="0px" width="500px" height="500px" viewBox="0 0 500 500" enable-background="new 0 0 500 500" xml:space="preserve" sodipodi:docname="airport03.svg" inkscape:version="1.1.1 (3bf5ae0, 2021-09-20)" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns="http://www.w3.org/2000/svg" xmlns:svg="http://www.w3.org/2000/svg">
                    <defs id="defs1063">
                    </defs>
                    <sodipodi:namedview id="namedview1061" pagecolor="#ffffff" bordercolor="#666666" borderopacity="1.0" inkscape:pageshadow="2" inkscape:pageopacity="0.0" inkscape:pagecheckerboard="0" showgrid="false" inkscape:zoom="0.39173716" inkscape:cx="2.5527321" inkscape:cy="39.567347" inkscape:window-width="1280" inkscape:window-height="975" inkscape:window-x="0" inkscape:window-y="25" inkscape:window-maximized="1" inkscape:current-layer="Layer" />


                    <g id="g28624">
                        <rect fill-rule="evenodd" clip-rule="evenodd" fill="#bdd3ff" width="499.99799" height="500" id="rect974" x="0" y="0" />
                        <path fill-rule="evenodd" clip-rule="evenodd" fill="#ffffff" d="m 499.998,234.707 v 62.659 c -4.724,2.374 -10.059,3.712 -15.706,3.712 -0.9,0 -1.794,-0.034 -2.677,-0.101 -2.943,15.191 -16.313,26.663 -32.365,26.663 -18.209,0 -32.971,-14.761 -32.971,-32.97 0,-0.175 0.005,-0.346 0.008,-0.519 -6.054,5.923 -14.338,9.577 -23.476,9.577 -18.538,0 -33.567,-15.03 -33.567,-33.566 0,-0.142 0.005,-0.28 0.006,-0.422 -0.717,0.049 -1.439,0.075 -2.167,0.075 -2.147,0 -4.243,-0.215 -6.271,-0.619 -5.602,13.525 -18.926,23.041 -34.475,23.041 -20.6,0 -37.298,-16.698 -37.298,-37.299 0,-20.598 16.698,-37.298 37.298,-37.298 5.023,0 9.812,0.995 14.185,2.795 5.698,-8.608 15.465,-14.286 26.562,-14.286 17.192,0 31.198,13.63 31.81,30.674 1.286,-0.15 2.593,-0.229 3.919,-0.229 18.538,0 33.566,15.027 33.566,33.567 0,0.257 -0.005,0.516 -0.01,0.771 5.929,-5.715 13.994,-9.233 22.882,-9.233 l 0.267,0.003 c 2.136,-17.308 16.89,-30.708 34.775,-30.708 5.646,0.003 10.981,1.339 15.705,3.713 z M 0,308.431 V 209.56 c 20.875,6.682 36,26.215 36.061,49.294 8.601,-5.599 18.865,-8.854 29.893,-8.854 3.669,0 7.255,0.363 10.722,1.051 4.428,-12.976 16.724,-22.308 31.199,-22.308 9.798,0 18.596,4.277 24.633,11.065 6.37,-5.493 14.663,-8.812 23.733,-8.812 20.084,0 36.366,16.282 36.366,36.365 0,20.087 -16.282,36.368 -36.366,36.368 -12.116,0 -22.847,-5.927 -29.455,-15.036 -2.258,1.585 -4.724,2.895 -7.348,3.877 0.905,3.955 1.384,8.07 1.384,12.299 0,30.303 -24.565,54.868 -54.868,54.868 -30.303,0 -54.869,-24.565 -54.869,-54.868 0,-0.507 0.007,-1.01 0.021,-1.51 -3.457,2.105 -7.179,3.815 -11.106,5.072 z" id="path976" />
                        <polygon fill-rule="evenodd" clip-rule="evenodd" fill="#8aa7a8" points="116.96,223.191 157.202,223.191 157.202,250 174.964,250 174.964,170.46 203.146,170.46 203.146,202.099 239.78,202.099 239.78,217.085 250,217.085 250,187.667 291.527,187.667 291.527,223.191 320.945,223.191 320.945,242.063 334.267,242.063 334.267,223.191 359.244,223.191 359.244,250 385.888,250 385.888,344.749 359.244,344.749 359.244,364.177 334.267,364.177 334.267,356.716 301.746,356.716 301.746,337.844 291.527,337.844 291.527,349.189 250,349.189 250,337.844 239.78,337.844 222.145,337.844 203.146,337.844 187.175,337.844 187.175,346.97 157.202,346.97 157.202,349.189 138.33,349.189 116.96,349.189 95.59,349.189 95.59,242.063 116.96,242.063 " id="polygon978" />
                        <path fill-rule="evenodd" clip-rule="evenodd" fill="#98b4b5" d="m 117.376,229.574 h 20.439 v 88.116 h -20.439 z m 251.305,25.811 h 9.158 v 58.143 h -9.158 z m -32.47,-25.811 h 15.542 v 83.953 h -15.542 z m -22.759,0 h -20.438 v 77.015 h 20.438 z M 252.951,193.08 h 23.591 v 124.61 h -23.591 z m -43.016,13.598 h 20.439 v 102.964 h -20.439 z m -32.194,-30.806 h 15.542 v 149.034 h -15.542 z" id="path980" />
                        <path fill-rule="evenodd" clip-rule="evenodd" fill="#91b03c" d="m 499.998,269.321 v 50.45 c -4.995,6.955 -13.153,11.488 -22.372,11.488 -10.097,0 -18.922,-5.435 -23.714,-13.538 -3.942,5.001 -10.056,8.21 -16.917,8.21 -5.15,0 -9.879,-1.81 -13.585,-4.826 -5.798,6.246 -14.077,10.154 -23.271,10.154 -8.896,0 -16.934,-3.658 -22.697,-9.552 -3.761,3.206 -8.636,5.144 -13.964,5.144 -9.996,0 -18.398,-6.809 -20.828,-16.042 -3.936,5.143 -10.136,8.462 -17.111,8.462 -5.081,0 -9.748,-1.761 -13.432,-4.702 -3.631,6.764 -10.771,11.362 -18.984,11.362 -11.896,0 -21.536,-9.643 -21.536,-21.537 0,-11.894 9.641,-21.536 21.536,-21.536 5.08,0 9.748,1.759 13.43,4.702 3.633,-6.764 10.771,-11.363 18.986,-11.363 9.994,0 18.397,6.811 20.827,16.041 3.937,-5.144 10.136,-8.459 17.112,-8.459 2.908,0 5.682,0.576 8.213,1.622 5.195,-10.454 15.981,-17.641 28.448,-17.641 12.191,0 22.774,6.874 28.096,16.955 2.676,-1.192 5.64,-1.857 8.76,-1.857 6.606,0 12.519,2.977 16.47,7.662 4.676,-8.535 13.742,-14.323 24.161,-14.323 5.614,0 10.836,1.683 15.19,4.569 1.558,-4.329 4.03,-8.221 7.182,-11.445 z M 0,337.844 V 278.05 c 4.237,1.518 8.057,3.911 11.243,6.96 3.448,-3.039 7.974,-4.882 12.931,-4.882 5.473,0 10.418,2.246 13.971,5.866 3.218,-10.554 13.03,-18.233 24.637,-18.233 11.356,0 20.995,7.352 24.42,17.554 2.987,-1.567 6.386,-2.456 9.994,-2.456 5.371,0 10.284,1.968 14.056,5.22 3.17,-11.705 13.866,-20.317 26.574,-20.317 10.742,0 20.045,6.154 24.584,15.128 0.313,-0.021 0.629,-0.03 0.947,-0.03 5.685,0 10.669,3.011 13.441,7.525 4.698,-8.461 13.721,-14.187 24.083,-14.187 15.205,0 27.532,12.327 27.532,27.532 0,15.205 -12.327,27.53 -27.532,27.53 -12.993,0 -23.883,-9.002 -26.777,-21.108 -2.816,2.627 -6.593,4.234 -10.747,4.234 -1.733,0 -3.401,-0.28 -4.959,-0.798 -5.044,5.666 -12.391,9.236 -20.571,9.236 -8.389,0 -15.901,-3.754 -20.95,-9.673 -3.356,7.53 -10.905,12.78 -19.68,12.78 -8.34,0 -15.571,-4.741 -19.15,-11.673 -4.272,3.147 -9.551,5.011 -15.265,5.011 -8.697,0 -16.388,-4.312 -21.05,-10.914 -3.195,6.467 -9.856,10.916 -17.557,10.916 -1.719,0 -3.388,-0.225 -4.977,-0.641 C 16.006,327.563 8.927,334.646 0,337.844 Z" id="path982" />
                        <rect y="303.729" fill-rule="evenodd" clip-rule="evenodd" fill="#a5c255" width="499.99799" height="196.271" id="rect984" x="0" />
                        <path fill-rule="evenodd" clip-rule="evenodd" fill="#4d4d4d" d="M 228.413,303.729 0,500 c 166.666,0 333.333,0 499.998,0 L 271.587,303.729 c -14.392,0 -28.782,0 -43.174,0 z" id="path988" />
                        <path fill-rule="evenodd" clip-rule="evenodd" fill="#ffffff" d="M 249.118,303.729 239.78,500 c 6.813,0 13.625,0 20.439,0 l -9.338,-196.271 c -0.588,0 -1.176,0 -1.763,0 z" id="path992" />
                        <path fill-rule="evenodd" clip-rule="evenodd" fill="#b3b3b3" d="m 247.149,345.09 -4.848,101.928 c 2.486,0.697 5.059,1.065 7.699,1.065 2.638,0 5.212,-0.368 7.698,-1.065 L 252.85,345.09 c -0.942,-0.095 -1.892,-0.143 -2.851,-0.143 -0.959,0 -1.909,0.048 -2.85,0.143 z" id="path994" />
                        <path fill-rule="evenodd" clip-rule="evenodd" fill="#ffffff" d="m 250,206.506 c 20.898,0 37.942,-34.811 37.942,-77.491 0,-42.681 -17.044,-77.491 -37.942,-77.491 -20.898,0 -37.942,34.811 -37.942,77.491 0,42.681 17.044,77.491 37.942,77.491 z" id="path996" />
                        <path fill-rule="evenodd" clip-rule="evenodd" fill="#ffffff" d="M 239.561,118.174 57.277,124.8 h -2.008 l -8.833,-4.818 -13.65,-0.602 14.855,22.886 195.533,14.455 z m 20.878,0 182.282,6.625 h 2.008 l 8.833,-4.818 13.651,-0.602 -14.855,22.886 -195.533,14.455 z" id="path998" />
                        <path fill-rule="evenodd" clip-rule="evenodd" fill="#e8f0ff" d="m 250,195.906 c 10.481,0 19.031,-17.459 19.031,-38.866 0,-21.407 -8.55,-38.866 -19.031,-38.866 -10.481,0 -19.031,17.459 -19.031,38.866 0,21.407 8.55,38.866 19.031,38.866 z" id="path1000" />
                        <path fill-rule="evenodd" clip-rule="evenodd" fill="#ffffff" d="m 229.146,183.12 -38.746,7.026 13.149,11.281 h 36.537 z m 41.707,0 38.747,7.026 -13.15,11.281 h -36.536 z" id="path1002" />
                        <g id="g1010">
                            <path fill-rule="evenodd" clip-rule="evenodd" fill="#e8f0ff" d="m 154.495,122.801 c 11.587,-2.273 22.347,2.844 24.03,11.43 8.015,40.86 -33.947,49.09 -41.961,8.23 -1.686,-8.585 6.342,-17.387 17.931,-19.66 z" id="path1004" />

                            <ellipse transform="matrix(-0.1925,-0.9813,0.9813,-0.1925,52.1074,319.5725)" fill-rule="evenodd" clip-rule="evenodd" fill="#8698ba" cx="157.545" cy="138.34599" rx="12.346" ry="16.663" id="ellipse1006" />

                            <ellipse transform="matrix(-0.1925,-0.9813,0.9813,-0.1925,49.2696,324.8283)" fill-rule="evenodd" clip-rule="evenodd" fill="#9fb1d1" cx="158.289" cy="142.142" rx="3.868" ry="5.2189999" id="ellipse1008" />
                        </g>
                        <g id="g1018">
                            <path fill-rule="evenodd" clip-rule="evenodd" fill="#e8f0ff" d="m 345.504,122.801 c -11.589,-2.273 -22.346,2.844 -24.029,11.43 -8.016,40.86 33.946,49.09 41.962,8.23 1.683,-8.585 -6.345,-17.387 -17.933,-19.66 z" id="path1012" />

                            <ellipse transform="matrix(0.1925,-0.9813,0.9813,0.1925,140.7783,447.7679)" fill-rule="evenodd" clip-rule="evenodd" fill="#8698ba" cx="342.45599" cy="138.34599" rx="12.346" ry="16.663" id="ellipse1014" />

                            <ellipse transform="matrix(0.1926,-0.9813,0.9813,0.1926,136.4027,450.0683)" fill-rule="evenodd" clip-rule="evenodd" fill="#9fb1d1" cx="341.70999" cy="142.142" rx="3.868" ry="5.2199998" id="ellipse1016" />
                        </g>
                        <path fill-rule="evenodd" clip-rule="evenodd" fill="#84a331" d="m 250,448.083 c 19.32,0 35.268,-19.628 37.637,-45.012 l 155.085,-3.751 h 2.008 l 8.833,3.206 13.651,0.4 -14.855,-15.229 -90.613,-4.458 c -9.001,-18.22 -35.522,-17.183 -40.477,-1.992 l -35.441,-1.743 c -1.931,-7.508 -5.103,-14.224 -9.18,-19.693 l 32.952,-3.978 -13.15,-7.506 h -32.917 c -4.203,-2.183 -8.765,-3.38 -13.532,-3.38 -4.769,0 -9.331,1.197 -13.534,3.38 H 203.55 l -13.149,7.506 32.951,3.978 c -4.078,5.47 -7.249,12.186 -9.179,19.693 l -35.443,1.743 c -4.955,-15.191 -31.474,-16.228 -40.476,1.992 l -90.612,4.458 -14.855,15.229 13.65,-0.4 8.833,-3.206 h 2.008 l 155.084,3.751 c 2.368,25.384 18.318,45.012 37.638,45.012 z" id="path986" style="fill:#000000;fill-opacity:0.08" />
                    </g>
                </svg>
            </div>




        </div>
    </div>
</body>
</html>
