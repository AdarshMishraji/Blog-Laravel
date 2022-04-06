@extends('layouts.app')
@section('content')
    <div class="from-indigo-400 via-indigo-600 bg-gradient-to-bl  to-indigo-700 clearfix">
        <div class="w-4/5 m-auto text-left">
            <div class="pt-20">
                <h1 class="text-6xl font-bold text-white">
                    Update Post
                </h1>
            </div>
        </div>

        <div class="w-4/5 mys-10 mx-auto pt-20">
            <form action="/blog/{{ $post->slug }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <input type="text" name="title" value="{{ $post->title }}"
                    class="bg-transparent block border-b-2 w-full h-20 text-6xl outline-none text-white">

                <textarea name="description" class="py-20 bg-transparent block border-b-2 w-full h-60 text-xl outline-none text-white">{{ $post->description }}
            </textarea>

                <button type="submit"
                    class="uppercase mt-15 bg-blue-800 text-white text-lg font-extrabold py-4 px-8 rounded-3xl">Submit
                    Post</button>
            </form>
        </div>
    </div>
@endsection
