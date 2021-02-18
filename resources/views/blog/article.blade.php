@extends('layouts.base')
@section('content')
<main class="gh-main">
    

    <article class="gh-article py-16 post">
    
        <header class="gh-header container mb-16">
            <h1 class="gh-title text-center text-3xl font-bold mb-4">{{$article->title}}</h1>
            <p class="gh-post-meta text-center text-sm  text-gray-200"><time datetime="{{$article->created_at->diffforhumans()}}">{{$article->created_at->diffforhumans()}}</time> <span class="bull">&bull;</span> {{read_time($article->body)}}</p>
    
    
            <img class="gh-feature-image rounded-lg border border-gray-700 mt-8"
    
                loading="lazy"
                src="{{$article->featured_image}}"
                alt="{{$article->title}}"
            />
        </header>
    
        <div class="gh-content  gh-canvas">
            {!!$article->body!!}
        </div>
    </article>
    

    </main>
    
@endsection