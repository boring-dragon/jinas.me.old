@extends('layouts.base')

@section('content')
<div class="container mx-auto">
    @if (session()->has('shorten'))
    <h2 class="text-sm text-green ml-5 mt-2 mb-5">
        {{ session()->get('shorten') }}
    </h2>
    @endif

    <div class="w-3/4 mx-auto">
        <div>
            <form method="POST" action="{{route('shorten.link.store')}}">
                @csrf
                <div class="md:flex mb-6">
    
                    <div class="w-full md:w-3/4">
                        <input type="text" name="link" value=""
                            class="border border-grey-light w-full py-2 px-4 rounded"
                            placeholder="Specify A link" required>
                    </div>
                </div>
               
                <div class="text-left mt-4">
                    <button style="background-color:#4299E1;"
                        class="text-white py-2 px-4 rounded shadow-md">Create a URL</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
