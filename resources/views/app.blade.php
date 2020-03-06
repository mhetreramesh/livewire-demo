<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <link href="/css/tailwind.min.css" rel="stylesheet">
    @livewireStyles
    @livewireScripts
</head>

<body class="bg-body text-body font-body">
    <div class="container mx-auto px-4">

        <nav class="flex justify-center p-4">
            <a class="text-xl text-indigo-500 font-semibold" href="#">Smartscreen</a>
        </nav>

        <section class="pt-8 px-4 pb-4">
            <h2 class="text-4xl mb-2 leading-tight font-heading">@livewire('timer')</h2>
            <div class="flex flex-wrap -mx-4 text-center">
                <livewire:card-person :poll="'8s'" :pollStart="'0s'"/>
                <livewire:card-person :poll="'8s'" :pollStart="'2s'"/>
                <livewire:card-person :poll="'8s'" :pollStart="'4s'"/>
                <livewire:card-person :poll="'8s'" :pollStart="'6s'"/>
            </div>
        </section>

        <footer class="flex flex-wrap flex-col lg:flex-row items-center p-4">
            <div class="flex flex-shrink-0"><a class="text-xl text-indigo-500 font-semibold" href="#">Dunder Mifflin</a></div>
            <div class="mt-4 lg:mt-0 lg:mx-auto"><a class="inline-block mt-0 mb-4 lg:mb-0 mr-8 text-blue-900 hover:text-blue-700" href="#">Products</a><a class="inline-block mt-0 mb-4 lg:mb-0 mr-8 text-blue-900 hover:text-blue-700" href="#">Team</a><a class="inline-block mt-0 mb-4 lg:mb-0 mr-8 text-blue-900 hover:text-blue-700" href="#">Customers</a><a class="inline-block mt-0 mb-4 lg:mb-0 text-blue-900 hover:text-blue-700" href="#">Blog</a></div>
            <div>&copy 2019 Dunder Mifflin</div>
        </footer>
    </div>
</body>

</html>
