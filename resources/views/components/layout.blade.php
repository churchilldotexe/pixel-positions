<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="css/style.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-black text-white/90">
    <header>
        <nav class="flex py-5 mx-5 border-b border-white/5 justify-between items-center">
            <div>
                <a href="/" class="inline-flex">
                    <img src="{{ Vite::asset('resources/images/logo.svg') }}"
                        alt="blue and gray boxes overlapped with pixel position text" fetchpriority="high"
                        class="" />
                </a>
            </div>
            <div class="space-x-5 font-bold text-white/90">
                <a href="">Jobs</a>
                <a href="">Career</a>
                <a href="">Salaries</a>
                <a href="">Companies</a>
            </div>
            @guest
                <div class="space-x-5 font-bold text-white/90">
                    <a href="/register">Register</a>
                    <a href="/login">Login</a>
                </div>
            @endguest

            @auth
                <div class="text-white/95">
                    <a href="/jobs/create">Post a job</a>
                </div>
            @endauth

        </nav>
    </header>
    <main class="max-w-[986px] mx-auto">
        {{ $slot }}
    </main>
</body>

</html>
