<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('partials.head')
</head>
<body class="min-h-screen bg-zinc-50 dark:bg-zinc-950 text-zinc-900 dark:text-zinc-100 flex items-center justify-center antialiased">
    <div class="text-center px-6">
        <h1 class="text-4xl font-semibold tracking-tight sm:text-5xl">Hello from Polyscope</h1>
        <p class="mt-4 text-lg text-zinc-500 dark:text-zinc-400">Polyscope is great</p>
    </div>
</body>
</html>
