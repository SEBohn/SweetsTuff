<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<header>
<style>
    body {
background-color: darkorchid

    }
</style>
</header>

<body >
    <div id="app">
<section class="px-8">
        <header class="conatiner mx-auto">
            <h1> <img src="/images/sweetstitle.png"  alt="titleimage" >
            </h1>
        </header>
</section>

<section class="px-8">
        <main class="container mx-auto">
            @yield('content')
        </main>
</section>
    </div>
</body>
</html>
