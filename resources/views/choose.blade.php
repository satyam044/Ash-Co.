@extends('Layouts.app')

@section('content')
<div class="w-full h-dvh max-h-dvh overflow-hidden">
    <x-navbar />
    <div class="w-full h-full relative">
        <div class="w-full h-full absolute flex justify-center items-center pointer-events-none">
            <div class="flex-col text-center text-white">
                <h2 class="text-white">Ash & Co.</h2>
                <p>Your Style. Your Brands. One Place.</p>
            </div>
        </div>
        <div class="w-full h-full flex">
            <div class="w-6/12 h-full">
                <img src="https://images.pexels.com/photos/443446/pexels-photo-443446.jpeg?cs=srgb&dl=pexels-eberhardgross-443446.jpg&fm=jpg"
                    class="h-full w-full object-cover cursor-pointer"
                    alt="">
            </div>
            <div class="w-6/12 h-full">
                <img src="https://thumbs.dreamstime.com/b/tiger-amazing-background-hd-wallpaper-tiger-amazing-background-hd-wallpaper-333534522.jpg"
                    class="h-full w-full object-cover cursor-pointer"
                    alt="">
            </div>
        </div>
    </div>
</div>
@endsection