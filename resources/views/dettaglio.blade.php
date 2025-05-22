<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>services</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>

<body>

    {{-- navbar --}}
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Business Growth</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('howarewe') ? 'active' : '' }}"
                            href="{{ route('howarewe') }}">chi siamo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('services') ? 'active' : '' }}"
                            href="{{ route('services') }}">servizi</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    {{-- end navbar --}}

    <div class="col-md-4">
        <div class="card h-100 shadow-sm border-0 rounded-4">
            <div class="card-body">
                <div class="mb-3">
                    <i class="bi bi-graph-up-arrow fs-1 text-primary"></i>
                </div>
                <h5 class="card-title">{{ $service['title'] }}</h5>
                <p>{{ $service['description'] }}</p>
                <img class="img-fluid" src="{{ $service['image'] }}" alt="">
                {{-- <p>{{ $service['price'] ? 'Prezzo:' . $service['price'] : 'GRATIS' }}</p> --}}

                @if ($service['price'])
                    <p>Prezzo: {{ $service['price'] }}</p>
                @else
                    <p>GRATIS</p>
                @endif
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous">
    </script>
</body>

</html>
