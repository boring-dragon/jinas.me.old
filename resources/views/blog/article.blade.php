@extends('layouts.base')
@section('content')
<div class="container mx-auto px-5 lg:max-w-lg mt-20">
<h1 class="mb-5 font-sans">{{$article->title}}</h1>

    <p class="text-muted text-sm font-sans block">
            @if ($article->updated_at->gte(Carbon\Carbon::today()))
            <span class="text-green">Recently Updated: {{$article->updated_at->diffforhumans()}} —</span>
            @else
            <span>Updated: {{$article->updated_at->diffforhumans()}} —</span>
            @endif
                    <span class="uppercase">{{read_time($article->body)}}</span>
                </p>

    <div class="mt-20 mb-10 leading-loose text-base text-text-color flex flex-col justify-center items-center post-body">
       {!!$article->body!!}
    </div>
    <div class="border-t-2 border-light mt-5 mb-10"></div>
    <h5 class="mb-2 text-right">{{$comments->count()}} Comments</h5>
    <div class="md:w-3/4 mx-auto px-8 md:px-0">
        <div>
        <form method="POST" action="{{route('comment.create')}}">
            @csrf

        <input type="hidden" name="post_id" value="{{$article->id}}">

                <div class="md:flex mb-6">
                   
                    <div class="w-full md:w-3/4">
                        <input type="text" name="name" value="" class="border leading-thaana border-grey-light w-full py-2 px-4 rounded" placeholder="Enter your name">
                    </div>
                </div> 
                <div class="md:flex">
                    
                    <div class="w-full md:w-3/4">
                        <textarea value="" name="comment" class="border border-grey-light leading-thaana w-full py-2 px-4 rounded" style="height: 170px;" placeholder="Comment...."></textarea>
                    </div>
                </div> 
                <div class="text-left mt-4">
                    <button style="background-color:#4299E1;" class="text-white py-2 px-4 rounded shadow-md">Comment</button>
                </div>
            </form>
        </div>
        </div>
        <div class="border-t-2 border-light mt-5 mb-10"></div>
        @foreach ($comments as $comment)
        <div style="background-color:#052230;" class="md:flex rounded-lg p-6 mt-10">
            <div class="text-center md:text-center">
            <h2 class="text-base text-muted ml-5 mt-2">
               {{$comment->name}}
            </h2>
            <div class="text-gray-600 mt-5 ml-5 mb-5">{{$comment->comment}}</div>
            </div>

          </div>
        @endforeach
        
            
  
@endsection
