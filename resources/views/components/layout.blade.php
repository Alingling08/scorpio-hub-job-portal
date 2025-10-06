<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@0,400;500;600;1,400;500;600&display=swap"
        rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-scorpioDark text-white font-hanken-grotesk pb-10">
    <div class="px-10">
        <nav class="flex justify-between items-center py-4 border-b border-white/10">
            <div><a href="/">
                    <img src="{{ Vite::asset('resources/images/scorpio-logo.png') }}" alt="" class="src" width="50" />
                </a>
            </div>
            <div class="space-x-6 font-bold">
                <a href="">Find a job</a>
                <a href="">Careers</a>
                <a href="">Salaries</a>
                <a href="">Companies</a>
            </div>

            @auth
                <div class="space-x-6 font-bold">
                    <a href="/jobs/create" class="bg-blue-800 rounded py-2 px-6 font-bold">Post a Job</a>

                    <form action="/logout" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Logout</button>
                    </form>
                </div>
            @endauth

            @guest
                <div class="space-x-6 font-bold">
                    <a href="/login">Log in</a>
                    <a href="/register">Sign Up</a>
                </div>
            @endguest
        </nav>
        <main class="mt-10 max-w-[986px] mx-auto">
            {{ $slot }}
        </main>
    </div>

</body>

</html>