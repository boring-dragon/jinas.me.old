@extends('layouts.base')
@section('content')


    @include('partials.about')
    <div class="container mx-auto px-5 lg:max-w-screen">
            
        @foreach ($posts as $post)
    <a class="no-underline transition block" href="/{{$post->slug}}">
            <div class="w-full mb-10 p-5 rounded" style="background-color:#181818;">
                                    <p class="text-muted font-sans text-xs mb-2">
                                        @if ($post->updated_at->gte(Carbon\Carbon::today()))
                                        <span class="text-green">Recently Updated: {{$post->updated_at->diffforhumans()}} —</span>
                                        @else
                                        <span>Updated: {{$post->updated_at->diffforhumans()}} —</span>
                                        @endif
                                                <span class="uppercase">{{read_time($post->body)}}</span>

                                            </p>

                    <h2 class="leading-normal block">
                        {{$post->title}}
                    </h2>

                    <p class="leading-normal mt-1 text-muted">
                    {{$post->excerpt ?? ''}}
                    </p>

                                                </div>
        </a>
        @endforeach
     
            
        
    
    <div class="uppercase flex items-center justify-center flex-1 py-5 font-sans">
        
    <a href="?page={{ $posts->currentPage() + 1 ?? '' }}" rel="next" class="block no-underline text-muted hover:text-white px-5">Check More Articles</a>
            </div>

</div>


   
@endsection
