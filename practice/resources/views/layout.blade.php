@php

    $navLinks = [
        [
            'title' => 'Home',
            'url' => route('home'),
            'active' => request()->routeIs('home'),
        ],
        [
            'title' => 'About',
            'url' => route('about'),
            'active' => request()->routeIs('about'),
        ],
        [
            'title' => 'Gallery',
            'url' => route('gallery'),
            'active' => request()->routeIs('gallery'),
        ],
    ];

@endphp

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    {{-- <title> {{ $title }} </title> --}}
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">


                    @foreach ($navLinks as $navLink)
                        <li class="nav-item">
                            <a class="nav-link {{ $navLink['active'] ? 'active' : '' }}" href="{{ $navLink['url'] }}">
                                {{ $navLink['title'] }} </a>
                        </li>
                    @endforeach

                </ul>

            </div>
        </div>
    </nav>
    <div class="container-fluid main-layout my-4">
        <div class="row h-full font-weight-bold">
            <div class="col-12 col-md-2 mb-4 mb-md-0">
                <div class="sidebar">
                    <h2>Sidebar</h2>
                    <ul>
                        @foreach ($navLinks as $navLink)
                            <li class="nav-item">
                                <a class="nav-link {{ $navLink['active'] ? 'active' : '' }}"
                                    href="{{ $navLink['url'] }}">
                                    {{ $navLink['title'] }} </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-12 col-md-8 mb-4 mb-md-0">
                @yield('content')
            </div>
            <div class="col-12 col-md-2 ">
                <div class="sidebar">
                    <h2>Sidebar</h2>
                    <ul>
                        @foreach ($navLinks as $navLink)
                            <li class="nav-item">
                                <a class="nav-link {{ $navLink['active'] ? 'active' : '' }}"
                                    href="{{ $navLink['url'] }}">
                                    {{ $navLink['title'] }} </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>
