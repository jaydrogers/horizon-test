{{ config('services.ssu_version') }}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="font-sans antialiased">
        <div class="max-w-md w-full mx-auto flex flex-col">
            <h2 class="font-bold text-3xl">Version</h2>
            {{ config('services.ssu_version') }}
            <h2 class="font-bold text-3xl mt-5">Long Running Job</h2>
            <a href="{{ route('dispatch-job') }}">
                <button class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Dispatch long running job</button>
            </a>

            <h2 class="font-bold text-3xl mt-5">Multiple Short Running Jobs</h2>
            <a href="{{ route('dispatch-short-jobs') }}">
                <button class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Dispatch short running jobs</button>
            </a>

            <h2 class="font-bold text-3xl mt-5">View Horizon Dashboard</h2>
            <a href="/horizon" target="_blank">
                <button class="rounded-md bg-yellow-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-yellow-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-yellow-600">View Horizon Dashboard</button>
            </a>
    </body>
</html>
