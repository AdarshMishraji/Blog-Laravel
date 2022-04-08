@extends('layouts.app')
@section('content')
    <div class="p-20 from-indigo-400 via-indigo-600 bg-gradient-to-bl  to-indigo-700">
        <p class="text-5xl text-white">Developed with ❤️ by Adarsh Mishra</p>
        <p class="text-xl text-gray-200 mt-12">Any suggestion or help? </p>
        <p class="text-4xl text-white mt-6">Contact us</p>
        <div class="flex items-center justify-around mt-10 p-24">
            <a href="mailto:adarshmishra969@gmail.com">
                <image src="../images/mail.svg" height="100px" width="100px" style="object-fit: contain" />
            </a>
            <a href="tel:+917678491697">
                <image src="../images/call.svg" height="100px" width="100px" style="object-fit: contain" />
            </a>
            <a href="https://www.linkedin.com/in/adarshmishra0001/">
                <image src="../images/linkedin.svg" height="100px" width="100px" style="object-fit: contain" />
            </a>
            <a href="https://github.com/AdarshMishraji">
                <image src="../images/github.svg" height="100px" width="100px" style="object-fit: contain" />
            </a>
        </div>
    </div>
@endsection
