@extends('layouts.app')
@section('content')
    <div class="from-indigo-400 via-indigo-600 bg-gradient-to-bl  to-indigo-700 clearfix">
        <div class="w-4/5 m-auto text-left">
            <div class="pt-20">
                <h1 class="text-6xl font-bold text-white">
                    Create Post
                </h1>
            </div>
        </div>

        @if ($errors->any())
            {
            <div class="w-4/5 m-auto px-5">
                <ul>
                    @foreach ($errors as $error)
                        <li class="w-1/5 mb-4 text-gray-50 bg-red-700 rounded-2xl py-4 px-5">
                            {{ $error }}
                        </li>
                    @endforeach
                </ul>
            </div>
            }
        @endif
        <div class="w-4/5 my-10 mx-auto pt-20">
            <form action="/blog" method="POST" enctype="multipart/form-data">
                @csrf

                <input type="text" name="title" placeholder="Title...."
                    class="bg-transparent block border-b-2 w-full h-20 text-6xl outline-none">

                <textarea name="description" placeholder="Description....."
                    class="py-20 bg-transparent block border-b-2 w-full h-60 text-xl outline-none"></textarea>

                <div class="mt-20">
                    <label
                        class="w-44 flex flex-col items-center px-5 py-4 bg-white rounded-3xl shadow-lg tracking-wide uppercase border border-blue cursor-pointer">
                        Select a file
                        <input type="file" name="image" class="hidden">
                    </label>
                </div>
                <button type="submit"
                    class="uppercase mt-15 bg-blue-800 text-white text-lg font-extrabold py-4 px-8 rounded-3xl">Submit
                    Post</button>
            </form>
        </div>
    </div>

@endsection
