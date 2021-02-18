@extends('layouts.base')
@section('content')


<main class="gh-main">
    @include('partials.about')
    <div class="gh-page">

        <div class="container py-16">



            <div class="gh-postfeed">
                @foreach ($posts as $post)
                <article class="gh-card mb-12 post tag-writing">
                    <a class="gh-card-link" href="/{{$post->slug}}">
                        <div class="text-left">
                            <p class="text-gray-100 opacity-70 text-sm mb-2"><time
                                    datetime="{{$post->created_at}}">{{$post->created_at->diffforhumans()}}</time> <span
                                    class="bull">&bull;</span> {{read_time($post->body)}}</p>
                            <h2 class="font-bold mb-2"> {{$post->title}}</h2>
                            <p class="text-gray-300 mb-4"> {{$post->excerpt ?? ''}}</p>
                            <span class="text-sm text-gray-100">Read more →</span>
                        </div>
                    </a>
                </article>

                @endforeach
            </div>

            {{$posts->links('vendor.pagination.simple-tailwind')}}

        </div>
    </div>
</main>
@endsection