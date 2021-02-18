<div class="container mx-auto px-5 lg:max-w-screen mb-10 pb-5">
    <div class="lg:flex items-center lg:px-10">
        <div class="w-full lg:w-1/6 text-center lg:text-left">
            <img src="{{$author->avatar}}" class="inline-block h-14 w-14 rounded-full">
        </div>
        <div class="lg:pl-5 leading-loose text-text-color w-full lg:w-5/6">
            <div>
             {!!$author->bio!!}
            </div>
        </div>
        
    </div>

    <div class="calendar">
       Loading...🔮
    </div>
</div>