<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My App</title>
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="/">My App</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('pasiens.index') }}">Pasien</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('dokters.index') }}">Dokter</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('pengobatans.index') }}">Pengobatan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('obats.index') }}">Obat</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('reseps.index') }}">Resep</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('kategoris.index') }}">Kategori</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="py-4">
        <div class="container">
            @yield('content')
        </div>
    </main>

    <footer class="mt-4">
        <div class="container text-center">
            &copy; {{ date('Y') }} My App. All rights reserved.
        </div>
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
