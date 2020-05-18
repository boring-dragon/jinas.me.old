
<!doctype html>
<html lang="en" class="font-sans antialiased">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<title>Jinas.me - {{$article->title ?? ''}}</title>

    <meta name="theme-color" content="#011627">

    <meta name="twitter:title" content="{{$article->title ?? 'Jinas.me  - Cooking something :)'}}">
    <meta name="og:title" content="{{$article->title ?? 'Jinas.me  - Cooking something :)'}}">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:description" content="{{$article->excerpt ?? 'Cooking something :)'}}">
    <meta name="twitter:site" content="@jinas123">
    <meta name="twitter:image" content="{{$article->featured_image ?? '/images/og.jpg'}}">

    <meta name="og:image" content="{{$article->featured_image ?? '/images/og.jpg'}}">
    <meta name="og:type" content="website">
    <meta name="og:locale" content="en_US">

    <link rel="icon" type="image/png" sizes="96x96" href="/images/og.jpg">
    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/10.0.3/highlight.min.js"></script>
    
    <link rel="stylesheet" href="//cdn.jsdelivr.net/gh/highlightjs/cdn-release@9.13.1/build/styles/sunburst.min.css">

    <!-- Styles -->
    <link href="/css/styles.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/highlight.js@10.0.3/styles/night-owl.css" rel="stylesheet">
    <script src="https://unpkg.com/turbolinks@5.2.0/dist/turbolinks.js"></script>

           
    
</head>
<body class="text-white body-bg-gradient bg-repeat-x">
    <header class="py-5 mb-10">
        <div class="container mx-auto px-5 lg:max-w-screen">
            <div class="flex items-center">
                <a href="/" class="no-underline text-white text-2xl font-thin tracking-wide">Jinas.me</a>
    
                <div class="ml-auto flex items-center">
                    <a href="/" class="text-white no-underline hover:underline text-xs font-bold uppercase">Home</a>
                    <a href="/pages/about" class="ml-5 text-white no-underline hover:underline text-xs font-bold uppercase">About</a>
                    <a href="/pages/timeline" class="ml-5 text-white no-underline hover:underline text-xs font-bold uppercase">Timeline</a>
                    <a href="/pages/projects" class="ml-5 text-white no-underline hover:underline text-xs font-bold uppercase">Projects</a>
                    <a href="/pages/videos" class="ml-5 text-white no-underline hover:underline text-xs font-bold uppercase">Videos</a>
                </div>
            </div>
        </div>
    </header>
 @yield('content')

 <div class="border-t-2 border-light mt-10">
    <div class="container mx-auto px-5 lg:max-w-screen">
        <div class="text-muted py-10 text-center">
        <a href="#" target="_blank">👩‍💻Mohamed Jinas</a>
        </div>
    </div>
</div>

<script>
        (function(){
            hljs.initHighlightingOnLoad();

            let targets = document.querySelectorAll('pre')

            targets.forEach(target => {
                hljs.highlightBlock(target)
            })
        })();
</script>
</body>
</html>
