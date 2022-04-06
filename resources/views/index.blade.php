@extends('layouts.app')
@section('content')
    <div class='grid grid-cols-1 m-auto from-indigo-400 via-indigo-600 bg-gradient-to-bl  to-indigo-700 h-full'>
        <div class='flex text-gray-100 pt-10 mt-20'>
            <div class='m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center'>
                <p class='sm:text-white text-5xl uppercase font-bold transition-shadow-md pb-10'>
                    Blog
                </p>
                <p class="pb-10">
                    Manage your blog, and make other read your creativity.
                </p>
                <a href='/blog'
                    class='text-center bg-gray-50 to-gray-700 py-2 px-4 font-bold text-xl uppercase text-black rounded-xl'>
                    Read Blogs
                </a>
            </div>
        </div>
        <p class="ml-20 font-bold text-3xl text-white">Recent Blogs</p>
        <div class="flex items-center flex-row w-full overflow-auto hide-scrollbar">
            @foreach ($posts as $post)
                <a class="m-10 shadow-2xl" style="min-width: 500px;" href="/blog/{{ $post->slug }}">
                    <div class="bg-white rounded-t-3xl flex justify-center">
                        <img src="{{ asset('images/uploadedImages/' . $post->image_path) }}" alt=""
                            class="object-contain h-56 w-auto">
                    </div>
                    <div class='bg-gray-400 p-6 rounded-b-3xl'>
                        <p class="font-bold text-lg pb-2">{{ $post->title }}</p>
                        <p class='text-gray-800 max-h-10 truncate'>{{ $post->description }}</p>
                    </div>
                </a>
            @endforeach
            <div class='h-full flex items-center justify-center px-10 mr-10'>
                <a class="text-xl text-white whitespace-no-wrap hover:underline" href="/blog"> Read More </a>
            </div>
        </div>
    </div>
@endsection
