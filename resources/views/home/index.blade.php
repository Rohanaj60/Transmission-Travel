<div class="login space-x-6 flex justify-end p-6">

    <Link href="{{route('dashboard')}}"> <button
        class="p-2 bg-indigo-500 hover:bg-indigo-600 text-white text-bold rounded-lg">

        Dashboard
    </button></Link>
    @auth
    <Link method="post" href="{{route('logout')}}"> <button
        class="p-2 bg-indigo-500 hover:bg-indigo-600 text-white text-bold rounded-lg">

        Logout
    </button></Link>
    @else

    <Link href="{{route('login')}}">
    <button class="p-2  bg-indigo-500 hover:bg-indigo-600 text-bold rounded-lg text-white">

        Login
    </button>
    </Link>
    <Link href="{{route('register')}}"> <button
        class="p-2 bg-indigo-500 hover:bg-indigo-600 text-white text-bold rounded-lg">

        Register
    </button></Link>
    @endauth
</div>

<div class="container bg-indigo-500 mx-auto flex items-center justify-center">

    <h1 class="text-3xl shadow-lg font-bold">Welcome To the world of coders</h1>
</div>