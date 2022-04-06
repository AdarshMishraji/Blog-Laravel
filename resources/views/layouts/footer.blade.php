<footer class="from-indigo-700 bg-gradient-to-b  to-indigo-600 py-20">
    <div class="sm:grid grid-cols-3 w-4/5 pb-10 m-auto border-b-2 border-indigo-700">
        <div>
            <h3 class="text-l sm:font-bold text-gray-100">
                Pages
            </h3>
            <ul class="py-4 sm:text-sm pt-4 text-gray-200">
                <li class="pb-1">
                    <a href="/">Home</a>
                </li>
                <li class="pb-1">
                    <a href="/blog">Blog</a>
                </li>
                @guest
                    <li class="pb-1">
                        <a class="no-underline hover:underline" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="pb-1">
                            <a href="/register">Register</a>
                        </li>
                    @endif
                @else
                    <li class="pb-1">
                        <span>{{ Auth::user()->name }}</span>
                        <a href="{{ route('logout') }}" class="no-underline hover:underline"
                            onclick="event.preventDefault();
                                                                                                                                    document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            {{ csrf_field() }}
                        </form>
                    </li>
                @endguest

                <li class="pb-1">
                    <a href="/aboutus">About us</a>
                </li>
            </ul>
        </div>
    </div>
    <p class="w-25 w-4/5 pb-3 m-auto text-xs text-gray-100 pt-6">
        Copyright 2022-2023 | Adarsh Mishra | Blog All rights reserved.
    </p>
</footer>
