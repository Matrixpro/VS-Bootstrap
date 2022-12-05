<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bootstrap 5, Laravel & Vite</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,500,600,70,800' rel='stylesheet' type='text/css'>
    <style>

</style>
</head>
<body>

<nav class="navbar navbar-light bg-light">
    <div class="container d-flex justify-content-between">
        <a class="navbar-brand" href="/">
            <img src="{{ Vite::asset('resources/images/logoipsum-227.svg') }}" alt="Awesome placeholder logo!">
        </a>
        <div>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                 stroke="currentColor" class="mh-100" style="width: 25px">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"/>
            </svg>
        </div>
    </div>
</nav>

<div class="container">
@yield('content')
</div>
<div class="container">
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <p class="col-md-4 mb-0 text-muted">© 2022 Mega Corp, Inc</p>

        <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
            <img src="{{ Vite::asset('resources/images/logoipsum-227.svg') }}" alt="Awesome placeholder logo!">
        </a>

        <ul class="nav col-md-4 justify-content-end">
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Features</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Pricing</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
        </ul>
    </footer>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
