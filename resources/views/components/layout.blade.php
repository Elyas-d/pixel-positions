<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Pixel Positions</title>
    @vite(['resources/js/app.js'])
</head>

<body class="bg-slate-900 text-white font-bold pb-20">
    <div class="px-10">
        <nav class="flex justify-between items-center border-b border-white/10 py-2 space-x-6">
            <div><a href="/">
                    <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="pixel positions">
                </a></div>
            <div class="font-bold space-x-2">
                <a href="/">Jobs</a>
                <a href="#">Careers</a>
                <a href="#">Salaries</a>
                <a href="#">Companies</a>
            </div>
            @auth
                <div class="inline-flex items-center gap-x-2">
                    <span class="w-2 h-2 bg-blue-500 inline-block"></span>
                    <a href="/jobs/create">Post a job</a>
                    <form method="POST" action="/logout">
                        @csrf
                        @method('DELETE')
                        <button class="border border-l-white/10">Log Out</button>
                    </form>
                </div>
            @endauth

            @guest
                <div class="font-bold space-x-2">
                    <a href="/register">Sign Up</a>
                    <a href="/login">Log In</a>
                </div>
            @endguest

        </nav>

        <main class="mb-5 max-w-[986px] m-auto">
            {{ $slot }}
        </main>
    </div>
</body>

</html>
