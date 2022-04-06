@extends('layouts.app')
@section('content')
    <div class="from-indigo-400 via-indigo-600 bg-gradient-to-bl  to-indigo-700 clearfix">
        <div class="w-4/5 m-auto text-left">
            <div class="pt-20">
                <h1 class="text-6xl  text-white font-bold">
                    {{ $post->title }}
                </h1>
            </div>
        </div>
        <div class="w-4/5 my-10 mx-auto pt-10 bg-white rounded-2xl shadow-2xl px-10">
            <div class="flex justify-center">
                <img src="{{ asset('images/' . $post->image_path) }}" alt="" width="500px" height="500px"
                    class="rounded-3xl object-cover">
            </div>
            <span class="text-gray-500">
                By <span class="font-bold italic text-gray-800">{{ $post->user->name }}</span>,Created on
                {{ date('jS M Y', strtotime($post->updated_at)) }}
            </span>
            <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
                {{ $post->description }}
            </p>
        </div>
    </div>
@endsection
