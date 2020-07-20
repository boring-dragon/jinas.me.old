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

    <div class="flex justify-end items-center">
        <svg xmlns="http://www.w3.org/2000/svg" height="30" viewBox="0 0 512 512"><path d="M309.75 192.348c-67.424 15.576-129.922 57.898-176.33 105.162 36.518 62.163 102.046 107.789 176.33 122.989 74.284-15.2 139.812-60.827 176.33-122.989-46.408-47.263-108.906-89.586-176.33-105.162z" fill="#e3f2ff"/><path d="M227.75 306c0-30.41 20.127-57.697 48.997-66.792A69.958 69.958 0 00255.75 236c-39.637 0-70 32.647-70 70 0 38.66 31.34 70 70 70 7.317 0 14.37-1.127 21-3.209-28.398-8.92-49-35.448-49-66.791z" fill="#fff"/><path d="M325.75 306c0-31.344-20.603-57.873-49.003-66.792-28.87 9.094-48.997 36.382-48.997 66.792 0 31.343 20.601 57.87 49 66.791 28.4-8.921 49-35.45 49-66.791z" fill="#4dbbeb"/><path d="M255.75 286c11.05 0 20 8.95 20 20s-8.95 20-20 20-20-8.95-20-20 8.95-20 20-20z" fill="#57555c"/><path d="M203.07 273.07c3.91-3.9 3.91-10.24 0-14.14-3.9-3.91-10.24-3.91-14.14 0-3.91 3.9-3.91 10.24 0 14.14 3.9 3.91 10.24 3.91 14.14 0zM286 306c0-16.542-13.458-30-30-30s-30 13.458-30 30 13.458 30 30 30 30-13.458 30-30zm-40 0c0-5.514 4.486-10 10-10s10 4.486 10 10-4.486 10-10 10-10-4.486-10-10z"/><path d="M256 386c44.112 0 80-35.888 80-80s-35.888-80-80-80c-11.178 0-21.987 2.259-32.124 6.715-5.056 2.223-7.353 8.123-5.131 13.179s8.123 7.352 13.179 5.131C239.509 247.691 247.61 246 256 246c33.084 0 60 26.916 60 60s-26.916 60-60 60-60-26.916-60-60c0-.342-.001-.676.007-1.018.128-5.521-4.244-10.101-9.765-10.229-5.53-.138-10.101 4.243-10.229 9.765-.012.498-.013.984-.013 1.482 0 44.112 35.888 80 80 80zM266 146V86c0-5.523-4.477-10-10-10s-10 4.477-10 10v60c0 5.523 4.477 10 10 10s10-4.477 10-10zM144.281 164.281c3.905-3.905 3.905-10.237 0-14.143l-42.42-42.42c-3.905-3.905-10.237-3.905-14.143 0-3.905 3.905-3.905 10.237 0 14.143l42.42 42.42c3.905 3.905 10.238 3.906 14.143 0zM381.862 164.281l42.42-42.42c3.905-3.905 3.905-10.237 0-14.143-3.905-3.905-10.237-3.905-14.143 0l-42.42 42.42c-3.905 3.905-3.905 10.237 0 14.143 3.904 3.905 10.237 3.906 14.143 0z"/><path d="M2.505 307.71c-3.656 4.14-3.264 10.459.875 14.115 4.14 3.656 10.46 3.264 14.115-.875a417.735 417.735 0 016.525-7.206C73.435 388.408 163.013 436 256 436s182.565-47.592 231.98-122.256a425.305 425.305 0 016.525 7.206c3.644 4.126 9.963 4.542 14.115.875 4.139-3.656 4.531-9.976.875-14.115C445.97 235.791 351.646 176 256 176c-95.659 0-189.982 59.806-253.495 131.71zM256 196c99.74 0 182.061 68.109 217.689 103.019C428.471 370.321 343.915 416 256 416S83.529 370.321 38.311 299.02C73.939 264.109 156.261 196 256 196z"/></svg>

        <span class="text-text-color font-bold">{{$views}}</span>
    </div>
    <div
        class="mt-20 mb-10 leading-loose text-base text-text-color flex flex-col justify-center items-center post-body">
        {!!$article->body!!}
    </div>
    <div class="border-t-2 border-light mt-5 mb-10"></div>
    @if (session()->has('success'))
    <h2 class="text-sm text-green ml-5 mt-2 mb-5">
        {{ session()->get('success') }}
    </h2>
    @endif

    <div class="md:w-3/4 mx-auto px-8 md:px-0">
        <div>
            <form method="POST" action="{{route('comment.create')}}">
                @csrf

                <input type="hidden" name="post_id" value="{{$article->id}}">

                <div class="md:flex mb-6">

                    <div class="w-full md:w-3/4">
                        <input type="text" name="name" value=""
                            class="border leading-thaana border-grey-light w-full py-2 px-4 rounded"
                            placeholder="Enter your name" required>
                    </div>
                </div>
                <div class="md:flex">

                    <div class="w-full md:w-3/4">
                        <textarea value="" name="comment"
                            class="border border-grey-light leading-thaana w-full py-2 px-4 rounded"
                            style="height: 170px;" placeholder="Comment...." required></textarea>
                    </div>
                </div>
                <div class="text-left mt-4">
                    <button style="background-color:#4299E1;"
                        class="text-white py-2 px-4 rounded shadow-md">Comment</button>
                </div>
            </form>
        </div>
    </div>
    @isset($comments)
    <h5 class="mb-2 text-right">{{$comments->count()}} Comments</h5>
    <div class="border-t-2 border-light mt-5 mb-10"></div>
    @foreach ($comments as $comment)
    <div style="background-color:#052230;" class="md:flex rounded-lg p-6 mt-10">
        <div class="text-center md:text-center">
            <h2 class="text-base text-muted ml-5 mt-2">
                {{$comment->name}}
            </h2>
            <div class="text-gray-600 mt-5 ml-5 mb-5" style="padding-bottom: 5px; padding-top:3px;">
                {{$comment->comment}}</div>
        </div>

    </div>
    @endforeach

    @endisset



    @endsection