<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title>Test</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>

</head>

<body class="font-sans antialiased bg-light">

<nav>
    <div class="shadow-xl">
        <div class="flex justify-between bg-blue-500 px-5 py-3">
            <div>
                <div class="bg-white w-10 h-10 rounded-full "></div>
            </div>
            <div><i class="text-white w-10 h-10 fas fa-user-alt fa-2x"></i></div>
        </div>
        <div class="flex justify-around px-5 py-3 ">
                <a href="#" class="text-blue-500 3xl uppercase underline">Sauveteur</a>
                <a href="#" class="text-blue-500 3xl uppercase underline">Sorties en mer</a>
                <a href="#" class="text-blue-500 3xl uppercase underline">Stations</a>
                <a href="#" class="text-blue-500 3xl uppercase underline">Service du port</a>
                <a href="#" class="text-blue-500 3xl uppercase underline">Moyens maritimes</a>

        </div>
    </div>
</nav>
    <!-- Page Content -->
    <main class="container my-5">
        @yield('content')
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>