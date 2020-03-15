<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <link href="/css/tailwind.min.css" rel="stylesheet">
    <link href="/css/app.css" rel="stylesheet">
    @livewireStyles
    @livewireScripts
</head>

<body class="bg-gray-200 text-body font-body overflow-hidden">
    <div class="container-lg mx-auto px-4">

        <nav class="flex justify-center p-4">
            <a class="text-3xl text-gray-800 font-semibold font-bold" href="#">Smartscreen</a>
        </nav>

        <section class="pt-8 px-4 pb-4">
            <div class="flex flex-wrap -mx-4 text-center">
                <livewire:card-notification :poll="'5s'"/>
                <livewire:card-news :poll="'0'"/>
                <livewire:card-news :poll="'5000'"/>
                <livewire:card-person :poll="'5s'"/>
            </div>
        </section>
    </div>
</body>

</html>
