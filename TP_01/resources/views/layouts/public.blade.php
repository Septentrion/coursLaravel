<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $title }}</title>
</head>
<body>
    <header>
        <h1>{{ $title }}</h1>
        @include('fragments.menu')
    </header>
    <main style="display:flex">
        <section>
            @yield('content')
        </section>
        <aside>
            @yield('sidebar')
        </aside>
    </main>
    <footer>
        @include('fragments.footer')
    </footer>
</body>
</html>