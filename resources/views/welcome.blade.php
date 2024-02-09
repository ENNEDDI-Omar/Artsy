<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @vite('resources/css/app.css')
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
        </style>
    </head>
    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-screen-lg mx-auto">
                <!-- header -->
                <header class="flex items-center justify-between py-2">
                    <a href="#" class="px-2 lg:px-0 font-bold capitalize">
                        Tech Blog
                    </a>
                    <button class="block md:hidden px-2 text-3xl">
                        <i class='bx bx-menu'></i>
                    </button>
                    <ul class="hidden md:inline-flex items-center">
                        <li class="px-2 md:px-4">
                            <a href="#" class="text-green-800 font-semibold hover:text-green-600"> Home </a>
                        </li>
                        <li class="px-2 md:px-4">
                            <a href="#" class="text-gray-500 font-semibold hover:text-green-600"> About </a>
                        </li>
                        <li class="px-2 md:px-4">
                            <a href="#" class="text-gray-500 font-semibold hover:text-green-600"> Press </a>
                        </li>
                        <li class="px-2 md:px-4">
                            <a href="#" class="text-gray-500 font-semibold hover:text-green-600"> Contact </a>
                        </li>
                        <li class="px-2 md:px-4 hidden md:block">
                            <a href="views/auth/login.php" class="text-gray-500 font-semibold hover:text-green-600"> Login </a>
                        </li>
                        <li class="px-2 md:px-4 hidden md:block">
                            <a href="views/auth/signup.php" class="text-gray-500 font-semibold hover:text-green-600"> Register </a>
                        </li>
                    </ul>
        
                </header>
                <!-- header ends here -->
        
                <main class="mt-12">
                    <!-- featured section -->
                    <div class="flex flex-wrap md:flex-no-wrap space-x-0 md:space-x-6 mb-16">
                        <!-- main post -->
                        <div class="mb-4 lg:mb-0  p-4 lg:p-0 w-full md:w-4/7 relative rounded block">
                            <img src="https://images.unsplash.com/photo-1427751840561-9852520f8ce8?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=900&q=60" class="rounded-md object-cover w-full h-64">
                            <span class="text-green-700 text-sm hidden md:block mt-4"> Technology </span>
                            <h1 class="text-gray-800 text-4xl font-bold mt-2 mb-2 leading-tight">
                                Ignorant branched humanity led now marianne too.
                            </h1>
                            <p class="text-gray-600 mb-4">
                                Necessary ye contented newspaper zealously breakfast he prevailed. Melancholy middletons yet understood
                                decisively boy law she. Answer him easily are its barton little. Oh no though mother be things simple
                                itself.
                                Oh be me, sure wise sons, no. Piqued ye of am spirit regret. Stimulated discretion impossible admiration in particular conviction up.
                            </p>
                            <a href="#" class="inline-block px-6 py-3 mt-2 rounded-md bg-green-700 text-gray-100">
                                Read more
                            </a>
                        </div>
        
                        <!-- sub-main posts -->
                        <div class="w-full md:w-4/7">
                            <!-- post 1 -->
                            <div class="rounded w-full flex flex-col md:flex-row mb-10">
                                <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=900&q=60" class="block md:hidden lg:block rounded-md h-64 md:h-32 m-4 md:m-0" />
                                <div class="bg-white rounded px-4">
                                    <span class="text-green-700 text-sm hidden md:block"> Gadgets </span>
                                    <div class="md:mt-0 text-gray-800 font-semibold text-xl mb-2">
                                        At every tiled on ye defer do. No attention suspected oh difficult.
                                    </div>
                                    <p class="block md:hidden p-2 pl-0 pt-1 text-sm text-gray-600">
                                        Wonder matter now can estate esteem assure fat roused. Am performed on existence as discourse is. Pleasure friendly at marriage blessing or
                                    </p>
                                </div>
                            </div>
        
                            <!-- post 2 -->
                            <div class="rounded w-full flex flex-col md:flex-row mb-10">
                                <img src="https://images.unsplash.com/photo-1531297484001-80022131f5a1?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=900&q=60" class="block md:hidden lg:block rounded-md h-64 md:h-32 m-4 md:m-0" />
                                <div class="bg-white rounded px-4">
                                    <span class="text-green-700 text-sm hidden md:block"> Bitcoin </span>
                                    <div class="md:mt-0 text-gray-800 font-semibold text-xl mb-2">
                                        Fond his say old meet cold find come whom. The sir park sake bred.
                                    </div>
                                    <p class="block md:hidden p-2 pl-0 pt-1 text-sm text-gray-600">
                                        Integer commodo, sapien ut vulputate viverra, Integer commodo
                                        Integer commodo, sapien ut vulputate viverra, Integer commodo
                                    </p>
                                </div>
                            </div>
                            <!-- post 3 -->
                            <div class="rounded w-full flex flex-col md:flex-row mb-10">
                                <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=900&q=60" class="block md:hidden lg:block rounded-md h-64 md:h-32 m-4 md:m-0" />
                                <div class="bg-white rounded px-4">
                                    <span class="text-green-700 text-sm hidden md:block"> Insights </span>
                                    <div class="md:mt-0 text-gray-800 font-semibold text-xl mb-2">
                                        Advice me cousin an spring of needed. Tell use paid law ever yet new.
                                    </div>
                                    <p class="block md:hidden p-2 pl-0 pt-1 text-sm text-gray-600">
                                        Meant to learn of vexed if style allow he there. Tiled man stand tears ten joy there terms any widen.
                                    </p>
                                </div>
                            </div>
                            <!-- post 4 -->
                            <div class="rounded w-full flex flex-col md:flex-row mb-10">
                                <img src="https://images.unsplash.com/photo-1489844097929-c8d5b91c456e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=900&q=60" class="block md:hidden lg:block rounded-md h-64 md:h-32 m-4 md:m-0" />
                                <div class="bg-white rounded px-4">
                                    <span class="text-green-700 text-sm hidden md:block"> Cryptocurrency </span>
                                    <div class="md:mt-0 text-gray-800 font-semibold text-xl mb-2">
                                        Advice me cousin an spring of needed. Tell use paid law ever yet new.
                                    </div>
                                    <p class="block md:hidden p-2 pl-0 pt-1 text-sm text-gray-600">
                                        Meant to learn of vexed if style allow he there. Tiled man stand tears ten joy there terms any widen.
                                    </p>
                                </div>
                            </div>
        
                        </div>
        
                    </div>
                    <!-- end featured section -->
        
        
                    <!-- recent posts -->
                    <div class="flex mt-16 mb-4 px-4 lg:px-0 items-center justify-between">
                        <h2 class="font-bold text-3xl">Latest news</h2>
                        <a class="bg-gray-200 hover:bg-green-200 text-gray-800 px-3 py-1 rounded cursor-pointer">
                            View all
                        </a>
                    </div>
                    <div class="block space-x-0 lg:flex lg:space-x-6">
        
                        <div class="rounded w-full lg:w-1/2 lg:w-1/3 p-4 lg:p-0">
                            <img src="https://images.unsplash.com/photo-1526666923127-b2970f64b422?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=900&q=60" class="rounded" alt="technology" />
                            <div class="p-4 pl-0">
                                <h2 class="font-bold text-2xl text-gray-800">Put all speaking her delicate recurred possible.</h2>
                                <p class="text-gray-700 mt-2">
                                    Set indulgence inquietude discretion insensible bed why announcing. Middleton fat two satisfied additions.
                                    So continued he or commanded household smallness delivered. Door poor on do walk in half. Roof his head the what.
                                </p>
        
                                <a href="#" class="inline-block py-2 rounded text-green-900 mt-2 ml-auto"> Read more </a>
                            </div>
                        </div>
        
                        <div class="rounded w-full lg:w-1/2 lg:w-1/3 p-4 lg:p-0">
                            <img src="https://images.unsplash.com/photo-1504384764586-bb4cdc1707b0?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=900&q=60" class="rounded" alt="technology" />
                            <div class="p-4 pl-0">
                                <h2 class="font-bold text-2xl text-gray-800">Is at purse tried jokes china ready decay an. </h2>
                                <p class="text-gray-700 mt-2">
                                    Small its shy way had woody downs power. To denoting admitted speaking learning my exercise so in.
                                    Procured shutters mr it feelings. To or three offer house begin taken am at.
                                </p>
        
                                <a href="#" class="inline-block py-2 rounded text-green-900 mt-2 ml-auto"> Read more </a>
                            </div>
                        </div>
        
                        <div class="rounded w-full lg:w-1/2 lg:w-1/3 p-4 lg:p-0">
                            <img src="https://images.unsplash.com/photo-1483058712412-4245e9b90334?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2100&q=80" class="rounded" alt="technology" />
                            <div class="p-4 pl-0">
                                <h2 class="font-bold text-2xl text-gray-800">As dissuade cheerful overcame so of friendly he indulged unpacked.</h2>
                                <p class="text-gray-700 mt-2">
                                    Alteration connection to so as collecting me.
                                    Difficult in delivered extensive at direction allowance.
                                    Alteration put use diminution can considered sentiments interested discretion.
                                </p>
        
                                <a href="#" class="inline-block py-2 rounded text-green-900 mt-2 ml-auto"> Read more </a>
                            </div>
                        </div>
        
                    </div>
                    <!-- end recent posts -->
        
                    <!-- subscribe -->
                    <div class="rounded flex md:shadow mt-12">
                        <img src="https://images.unsplash.com/photo-1579275542618-a1dfed5f54ba?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=900&q=60" class="w-0 md:w-1/4 object-cover rounded-l" />
                        <div class="px-4 py-2">
                            <h3 class="text-3xl text-gray-800 font-bold">Subscribe to newsletter</h3>
                            <p class="text-xl text-gray-700">We sent latest news and posts once in every week, fresh from the oven</p>
                            <form class="mt-4 mb-10">
                                <input type="email" class="rounded bg-gray-100 px-4 py-2 border focus:border-green-400" placeholder="john@tech.com" />
                                <button class="px-4 py-2 rounded bg-green-800 text-gray-100">
                                    Subscribe
                                    <i class='bx bx-right-arrow-alt'></i>
                                </button>
                                <p class="text-green-900 opacity-50 text-sm mt-1">No spam. We promise</p>
                            </form>
                        </div>
                    </div>
                    <!-- ens subscribe section -->
        
        
        
                    <!-- popular posts -->
                    <div class="flex mt-16 mb-4 px-4 lg:px-0 items-center justify-between">
                        <h2 class="font-bold text-3xl">Popular news</h2>
                        <a class="bg-gray-200 hover:bg-green-200 text-gray-800 px-3 py-1 rounded cursor-pointer">
                            View all
                        </a>
                    </div>
                    <div class="block space-x-0 lg:flex lg:space-x-6">
        
                        <div class="rounded w-full lg:w-1/2 lg:w-1/3 p-4 lg:p-0">
                            <img src="https://images.unsplash.com/photo-1526666923127-b2970f64b422?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=900&q=60" class="rounded" alt="technology" />
                            <div class="p-4 pl-0">
                                <h2 class="font-bold text-2xl text-gray-800">Put all speaking her delicate recurred possible.</h2>
                                <p class="text-gray-700 mt-2">
                                    Set indulgence inquietude discretion insensible bed why announcing. Middleton fat two satisfied additions.
                                    So continued he or commanded household smallness delivered. Door poor on do walk in half. Roof his head the what.
                                </p>
        
                                <a href="#" class="inline-block py-2 rounded text-green-900 mt-2 ml-auto"> Read more </a>
                            </div>
                        </div>
        
                        <div class="rounded w-full lg:w-1/2 lg:w-1/3 p-4 lg:p-0">
                            <img src="https://images.unsplash.com/photo-1504384764586-bb4cdc1707b0?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=900&q=60" class="rounded" alt="technology" />
                            <div class="p-4 pl-0">
                                <h2 class="font-bold text-2xl text-gray-800">Is at purse tried jokes china ready decay an. </h2>
                                <p class="text-gray-700 mt-2">
                                    Small its shy way had woody downs power. To denoting admitted speaking learning my exercise so in.
                                    Procured shutters mr it feelings. To or three offer house begin taken am at.
                                </p>
        
                                <a href="#" class="inline-block py-2 rounded text-green-900 mt-2 ml-auto"> Read more </a>
                            </div>
                        </div>
        
                        <div class="rounded w-full lg:w-1/2 lg:w-1/3 p-4 lg:p-0">
                            <img src="https://images.unsplash.com/photo-1483058712412-4245e9b90334?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2100&q=80" class="rounded" alt="technology" />
                            <div class="p-4 pl-0">
                                <h2 class="font-bold text-2xl text-gray-800">As dissuade cheerful overcame so of friendly he indulged unpacked.</h2>
                                <p class="text-gray-700 mt-2">
                                    Alteration connection to so as collecting me.
                                    Difficult in delivered extensive at direction allowance.
                                    Alteration put use diminution can considered sentiments interested discretion.
                                </p>
        
                                <a href="#" class="inline-block py-2 rounded text-green-900 mt-2 ml-auto"> Read more </a>
                            </div>
                        </div>
        
                    </div>
                    <!-- end popular posts -->
        
                </main>
                <!-- main ends here -->
        
                <!-- footer -->
                <footer class="border-t mt-12 pt-12 pb-32 px-4 lg:px-0">
                    <div class="flex flex-wrap">
                        <div class="w-full lg:w-2/5">
                            <p class="text-gray-600 hidden lg:block p-0 lg:pr-12">
                                Boisterous he on understood attachment as entreaties ye devonshire.
                                In mile an form snug were been sell.
                                Extremely ham any his departure for contained curiosity defective.
                                Way now instrument had eat diminution melancholy expression sentiments stimulated.
                            </p>
                        </div>
        
                        <div class="w-full mt-6 lg:mt-0 md:w-1/2 lg:w-1/5">
                            <h6 class="font-semibold text-gray-700 mb-4">Company</h6>
                            <ul>
                                <li> <a href="#" class="block text-gray-600 py-2">Team</a> </li>
                                <li> <a href="#" class="block text-gray-600 py-2">About us</a> </li>
                                <li> <a href="#" class="block text-gray-600 py-2">Press</a> </li>
                            </ul>
                        </div>
        
                        <div class="w-full mt-6 lg:mt-0 md:w-1/2 lg:w-1/5">
                            <h6 class="font-semibold text-gray-700 mb-4">Content</h6>
                            <ul>
                                <li> <a href="#" class="block text-gray-600 py-2">Blog</a> </li>
                                <li> <a href="#" class="block text-gray-600 py-2">Privacy Policy</a> </li>
                                <li> <a href="#" class="block text-gray-600 py-2">Terms & Conditions</a> </li>
                                <li> <a href="#" class="block text-gray-600 py-2">Documentation</a> </li>
                            </ul>
                        </div>
        
                        <div class="w-full mt-6 lg:mt-0 md:w-1/2 lg:w-1/5">
                            <h6 class="font-semibold text-gray-700 mb-4">Company</h6>
                            <ul>
                                <li> <a href="#" class="block text-gray-600 py-2">Team</a> </li>
                                <li> <a href="#" class="block text-gray-600 py-2">About us</a> </li>
                                <li> <a href="#" class="block text-gray-600 py-2">Press</a> </li>
                            </ul>
                        </div>
        
                    </div>
                </footer>
            </div>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
        </div>
    </body>
</html>
