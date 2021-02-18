<!doctype html>
<html lang="en" class="font-sans antialiased">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Jinas.me - {{$article->title ?? $snippet->title ?? ''}}</title>

    <meta name="theme-color" content="#011627">

    <meta name="twitter:title" content="{{$article->title ?? $snippet->title ?? 'Jinas.me  - Cooking something :)'}}">
    <meta name="og:title" content="{{$article->title ?? $snippet->title ?? 'Jinas.me  - Cooking something :)'}}">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:description" content="{{$article->excerpt ?? 'Cooking something :)'}}">
    <meta name="twitter:site" content="@jinas123">
    <meta name="twitter:image" content="https://jinas.me{{$article->featured_image ?? '/images/og.jpg'}}">

    <meta name="og:image" content="https://jinas.me{{$article->featured_image ?? '/images/og.jpg'}}">
    <meta name="og:type" content="website">
    <meta name="og:locale" content="en_US">

    <link rel="icon" type="image/png" sizes="96x96" href="/images/og.jpg">
    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/10.0.3/highlight.min.js"></script>

    <link rel="stylesheet" href="//cdn.jsdelivr.net/gh/highlightjs/cdn-release@9.13.1/build/styles/sunburst.min.css">

    <!-- Styles -->
    <link href="/css/styles.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/highlight.js@10.0.3/styles/night-owl.css" rel="stylesheet">
    <script src="https://unpkg.com/turbolinks@5.2.0/dist/turbolinks.js"></script>
    <script src="https://unpkg.com/github-calendar@latest/dist/github-calendar.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/github-calendar@latest/dist/github-calendar-responsive.css" />


</head>

<body x-ref="body" x-init="open = false" x-data="{ open: false }" x-on:keydown.escape="open = false"
    class="  font-sans bg-dark-black text-gray-200 min-h-screen antialiased" :class="{ 'overflow-hidden': open }">
    <header id="gh-head" class="gh-head py-4">
        <nav class="container flex items-center justify-between">
            <div class="gh-head-brand flex items-center justify-between w-full md:w-auto">
                <button @click="open = true"
                    class="bg-gray-800 shadow text-sm p-3 rounded-lg flex md:hidden items-center">
                    <svg class="w-4 h-4 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                    Menu
                </button>
            </div>
            <div class="gh-head-menu hidden md:flex items-center">
                <div class="mr-3">
                    <ul class="nav">
                        <li class="nav-home"><a href="/">Home</a></li>
                        <li class="nav-articles nav-current"><a href="/pages/about">About</a></li>
                        <li class="nav-now"><a href="/pages/timeline">Timeline</a></li>
                        <li class="nav-hire"><a href="/pages/projects">Projects</a></li>
                        <li class="nav-hire"><a href="/pages/videos">Videos</a></li>
                    </ul>

                </div>

                <div class="flex items-center">
                    <a href="https://twitter.com/jakzaizzat" title="Twitter" target="_blank" rel="noopener"
                        class="mr-3">
                        <svg class="w-6 h-6" fill="currentColor" stroke="currentColor"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                            <path
                                d="M30.063 7.313c-.813 1.125-1.75 2.125-2.875 2.938v.75c0 1.563-.188 3.125-.688 4.625a15.088 15.088 0 0 1-2.063 4.438c-.875 1.438-2 2.688-3.25 3.813a15.015 15.015 0 0 1-4.625 2.563c-1.813.688-3.75 1-5.75 1-3.25 0-6.188-.875-8.875-2.625.438.063.875.125 1.375.125 2.688 0 5.063-.875 7.188-2.5-1.25 0-2.375-.375-3.375-1.125s-1.688-1.688-2.063-2.875c.438.063.813.125 1.125.125.5 0 1-.063 1.5-.25-1.313-.25-2.438-.938-3.313-1.938a5.673 5.673 0 0 1-1.313-3.688v-.063c.813.438 1.688.688 2.625.688a5.228 5.228 0 0 1-1.875-2c-.5-.875-.688-1.813-.688-2.75 0-1.063.25-2.063.75-2.938 1.438 1.75 3.188 3.188 5.25 4.25s4.313 1.688 6.688 1.813a5.579 5.579 0 0 1 1.5-5.438c1.125-1.125 2.5-1.688 4.125-1.688s3.063.625 4.188 1.813a11.48 11.48 0 0 0 3.688-1.375c-.438 1.375-1.313 2.438-2.563 3.188 1.125-.125 2.188-.438 3.313-.875z" />
                            </svg> </a>
                    <a href="mailto:jakz@hey.com" title="Email" target="_blank" rel="noopener" class="mr-3">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                        </svg>
                    </a>
                    <a href="https://feedly.com/i/subscription/feed/https://jakzaizzat.com/rss/" title="RSS"
                        target="_blank" rel="noopener">
                        <svg class="w-6 h-6" fill="currentColor" stroke="currentColor"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22 22">
                            <circle cx="6.18" cy="17.82" r="2.18" />
                            <path
                                d="M4 4.44v2.83c7.03 0 12.73 5.7 12.73 12.73h2.83c0-8.59-6.97-15.56-15.56-15.56zm0 5.66v2.83c3.9 0 7.07 3.17 7.07 7.07h2.83c0-5.47-4.43-9.9-9.9-9.9z" />
                            </svg>
                    </a>
                </div>
            </div>

            <div x-show="open" x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 transform scale-90"
                x-transition:enter-end="opacity-100 transform scale-100"
                x-transition:leave="transition ease-in duration-300"
                x-transition:leave-start="opacity-100 transform scale-100"
                x-transition:leave-end="opacity-0 transform scale-90"
                :class="{ 'absolute block': open , 'relative hidden': !open }"
                class="mobile-nav p-8 hidden top-0 left-0 bg-gray-900 z-30 h-screen w-full transition ease-in duration-300">
                <div class="flex justify-end mb-4">
                    <button @click="open = false"
                        class="border rounded-full p-3 h-12 w-12 flex items-center justify-center"><svg class="w-8 h-8"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12"></path>
                        </svg></button>
                </div>
                <ul class="nav">
                    <li class="nav-home"><a href="/">Home</a></li>
                    <li class="nav-articles nav-current"><a href="/pages/about">About</a></li>
                    <li class="nav-now"><a href="/pages/timeline">Timeline</a></li>
                    <li class="nav-hire"><a href="/pages/projects">Projects</a></li>
                    <li class="nav-hire"><a href="/pages/videos">Videos</a></li>
                </ul>



                <div class="border-t border-gray-800 py-4 flex flex-col">
                    <a href="https://twitter.com/jakzaizzat" title="Twitter" target="_blank" rel="noopener"
                        class="mr-3 text-3xl mb-8 flex items-center">
                        <svg class="w-6 h-6" fill="currentColor" stroke="currentColor"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                            <path
                                d="M30.063 7.313c-.813 1.125-1.75 2.125-2.875 2.938v.75c0 1.563-.188 3.125-.688 4.625a15.088 15.088 0 0 1-2.063 4.438c-.875 1.438-2 2.688-3.25 3.813a15.015 15.015 0 0 1-4.625 2.563c-1.813.688-3.75 1-5.75 1-3.25 0-6.188-.875-8.875-2.625.438.063.875.125 1.375.125 2.688 0 5.063-.875 7.188-2.5-1.25 0-2.375-.375-3.375-1.125s-1.688-1.688-2.063-2.875c.438.063.813.125 1.125.125.5 0 1-.063 1.5-.25-1.313-.25-2.438-.938-3.313-1.938a5.673 5.673 0 0 1-1.313-3.688v-.063c.813.438 1.688.688 2.625.688a5.228 5.228 0 0 1-1.875-2c-.5-.875-.688-1.813-.688-2.75 0-1.063.25-2.063.75-2.938 1.438 1.75 3.188 3.188 5.25 4.25s4.313 1.688 6.688 1.813a5.579 5.579 0 0 1 1.5-5.438c1.125-1.125 2.5-1.688 4.125-1.688s3.063.625 4.188 1.813a11.48 11.48 0 0 0 3.688-1.375c-.438 1.375-1.313 2.438-2.563 3.188 1.125-.125 2.188-.438 3.313-.875z" />
                            </svg> <span class="text-lg ml-3">@jakzaizzat</span>
                    </a>
                    <a href="mailto:jakz@hey.com" title="Email" target="_blank" rel="noopener"
                        class="mr-3 text-3xl mb-8 flex items-center">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                        </svg>
                        <span class="text-lg ml-3">jakz@hey.com</span>
                    </a>
                    <a class="flex items-center"
                        href="https://feedly.com/i/subscription/feed/https://jakzaizzat.com/rss/" title="RSS"
                        target="_blank" rel="noopener">
                        <svg class="w-6 h-6" fill="currentColor" stroke="currentColor"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22 22">
                            <circle cx="6.18" cy="17.82" r="2.18" />
                            <path
                                d="M4 4.44v2.83c7.03 0 12.73 5.7 12.73 12.73h2.83c0-8.59-6.97-15.56-15.56-15.56zm0 5.66v2.83c3.9 0 7.07 3.17 7.07 7.07h2.83c0-5.47-4.43-9.9-9.9-9.9z" />
                            </svg>
                        <span class="text-lg ml-3">/rss</span>
                    </a>
                </div>

            </div>
        </nav>
    </header>
    @yield('content')

    <footer class="gh-foot">
        <div class="container text-center py-8">
            Thanks you for reading © 2021
        </div>
    </footer>
    <script>
        (function(){
            hljs.initHighlightingOnLoad();

            let targets = document.querySelectorAll('pre')

            targets.forEach(target => {
                hljs.highlightBlock(target)
            })
        })();

    GitHubCalendar(".calendar", "boring-dragon", { responsive: true });
    </script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js" defer></script>
</body>

</html>