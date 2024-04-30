<header class="w-screen flex justify-center row">
    <nav class="bg-slate-700 rounded-lg p-5 mx-20">
        <a class="mx-20 rounded-lg p-2 transition-all duration-300 hover:bg-slate-500
             {{ strpos(Request::url(), '/') === 0 ? 'bg-white' : '' }}"
            href="/">Home</a>
        <a class="mx-20 rounded-lg p-2 transition-all duration-300 hover:bg-slate-500
             {{ strpos(Request::url(), '/about') === 0 ? 'bg-white' : '' }}"
            href="/about">About</a>
        <a class="mx-20 rounded-lg p-2 transition-all duration-300 hover:bg-slate-500
             {{ strpos(Request::url(), '/contact') === 0 ? 'bg-white' : '' }}"
            href="/contact">Contact</a>
    </nav>
</header>
