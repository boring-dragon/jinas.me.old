@extends('layouts.base')

@section('content')
<div class="container mx-auto px-5 lg:max-w-lg mt-20">
    <h1 class="mb-5 font-sans">{{$snippet->title}}</h1>

    <p class="text-muted text-sm font-sans block">
        <span>Created: {{$snippet->created_at->diffforhumans()}}</span>
    </p>

    <div
    class="mt-20 mb-10 leading-loose text-base text-text-color flex flex-col justify-center items-center post-body">
    <pre>
    {{$snippet->code}}
    </pre>
</div>
</div>   
@endsection
