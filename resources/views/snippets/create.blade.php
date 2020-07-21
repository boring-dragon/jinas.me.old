@extends('layouts.base')

@section('content')
<div class="container mx-auto">
    @if (session()->has('snippet'))
    <h2 class="text-sm text-green ml-5 mt-2 mb-5">
        {{ session()->get('snippet') }}
    </h2>
    @endif

    <div class="w-3/4 mx-auto">
        <div>
            <form method="POST" action="{{route('snippet.store')}}">
                @csrf
                <div class="md:flex mb-6">
    
                    <div class="w-full md:w-3/4">
                        <input type="text" name="title" value=""
                            class="border border-grey-light w-full py-2 px-4 rounded"
                            placeholder="Snippet title" required>
                    </div>
                </div>
                <div class="md:flex">
    
                    <div class="w-full md:w-3/4">
                        <textarea value="" name="code"
                            class="border border-grey-light w-full py-2 px-4 rounded"
                            style="height:200px;" placeholder="Code...." required></textarea>
                    </div>
                </div>
                <div class="text-left mt-4">
                    <button style="background-color:#4299E1;"
                        class="text-white py-2 px-4 rounded shadow-md">Create a snippet</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
