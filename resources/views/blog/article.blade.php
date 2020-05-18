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

  
@endsection
