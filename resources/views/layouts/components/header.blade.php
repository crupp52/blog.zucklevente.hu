<div class="w-full py-10">
    <div class="w-2/3 mx-auto flex navbar">
        <div class="flex gap-7">
            <a href="{{ route('home') }}" class="@if(Request::routeIs('home')) active @endif">Főoldal</a>
            <a href="{{ route('post.index') }}" class="@if(Request::routeIs('post.*')) active @endif">Bejegyzések</a>
            <a href="https://zucklevente.hu/" target="_blank">Rólam</a>
            @auth
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    @method('POST')
                    <button type="submit" href="#">Kijelentkezés</button>
                </form>
            @else
                <a href="{{ route('login') }}">Bejelentkezés</a>
            @endauth
        </div>
    </div>

</div>