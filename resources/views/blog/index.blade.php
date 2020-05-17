@extends('layouts.base')
@section('content')


    <div class="container mx-auto px-5 lg:max-w-screen mb-10 pb-5">
    <div class="lg:flex items-center lg:px-10">
        <div class="w-full lg:w-1/6 text-center lg:text-left lg:block hidden">
            <img src="{{$author->avatar}}" class="rounded-full">
        </div>
        <div class="lg:pl-5 leading-loose text-text-color w-full lg:w-5/6">
            <div>
                I'm
                <a href="https://twitter.com/rootfs7">Mohamed Jinas</a>, Software Developer, Science Lover, Electronic Hobbyist
                <br>
                This is my personal website mainly to record my studies, research, experiments and other interesting things I come across. I just love writing things :)
            </div>
        </div>
    </div>
</div>
    <div class="container mx-auto px-5 lg:max-w-screen">
            
        @foreach ($posts as $post)
    <a class="no-underline transition block" href="/{{$post->slug}}">
            <div class="w-full mb-10 p-5 bg-light rounded">
                                    <p class="text-muted font-sans text-xs mb-2">
                                                    <span>Updated: {{$post->updated_at->diffforhumans()}} —</span>
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
