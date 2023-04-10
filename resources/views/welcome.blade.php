<!doctype html>
<html lang="en" xmlns:livewire="http://www.w3.org/1999/html">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Livewire Playground</title>
        @vite('resources/css/app.css')
        <livewire:styles />
    </head>
    <body>
        <main class="container mx-auto">
            <div class="my-8">
                <h1 class="text-3xl font-bold">Livewire Playground</h1>
                <h2 class="text-lg font-semibold mt-4">Livewire Data Tables</h2>

                <livewire:data-table />
            </div>
        </main>

    <livewire:scripts />
    </body>
</html>
