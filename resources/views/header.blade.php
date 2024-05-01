<header class="w-screen flex justify-center row">
    <nav class="bg-slate-700 rounded-lg p-5 mx-20">
        <a class="mx-20 rounded-lg p-2 transition-all duration-300 hover:bg-slate-500
             {{ Str::contains(Request::url(), "/home") ? 'bg-white' : '' }}"
            href="/home">Home</a>
        <a class="mx-20 rounded-lg p-2 transition-all duration-300 hover:bg-slate-500
             {{ Str::contains(Request::url(), "/about") ? 'bg-white' : '' }}"
            href="/about">About</a>
        <a class="mx-20 rounded-lg p-2 transition-all duration-300 hover:bg-slate-500
             {{ Str::contains(Request::url(), "/contact") ? 'bg-white' : '' }}"
            href="/contact">Contact</a>
    </nav>
</header>
