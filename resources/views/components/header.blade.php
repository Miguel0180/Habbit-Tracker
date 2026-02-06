<header class="bg-white border-bottom border-b-2 flex intem-center justify-between p-4">
    <div>
        Logo aqui
    </div>

    <div>
        Github

        @auth
        <form action="{{ route('auth.logout')}}" method="POST">
            @csrf
            <button type="submit" class="bg-red p-2 border-2">Logout</button>

        </form>
        @endauth

        @guest
            <a href="{{route('site.login')}}" class="bg-white p-2 border-2">
                Login
            </a>
        @endguest
    </div>
</header>