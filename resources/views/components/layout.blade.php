<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/js/app.js'])
</head>

<body class="bg-slate-900 text-white font-bold">
    <div class="px-10">
        <nav class="flex justify-between items-center border-b border-white/10 py-2 space-x-6">
            <div><a href="#">
                    <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="pixel positions">
                </a></div>
            <div class="font-bold space-x-2">
                <a href="#">jobs</a>
                <a href="#">careers</a>
                <a href="#">salaries</a>
                <a href="#">companies</a>
            </div>
            <div class="inline-flex items-center gap-x-2">
                <span class="w-2 h-2 bg-blue-500 inline-block"></span>
                <a href="#">post a job</a>
            </div>
        </nav>

        <main class="mt-10 max-w-[986px] m-auto">
            {{ $slot }}
        </main>
    </div>
</body>

</html>
