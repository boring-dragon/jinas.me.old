@extends('layouts.base')
@section('content')
<div class="container mx-auto px-5 lg:max-w-lg mt-20">
<h1 class="mb-5 font-sans">{{$post->title}}</h1>

    <p class="text-muted text-sm font-sans block">
                        <span>Updated: {{$post->updated_at->diffforhumans()}} —</span>
                    <span class="uppercase">{{read_time($post->body)}}</span>
                </p>

    <div class="mt-20 mb-10 leading-loose text-base text-text-color flex flex-col justify-center items-center post-body">
       {!!$post->body!!}
    </div>

  
@endsection
