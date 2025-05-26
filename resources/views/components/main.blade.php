<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'Sono nullo' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    {{ $qui ?? '' }}
</head>

<body>
    <x-navbar />

    {{ $slot }}

    <footer class="bg-light text-center text-lg-start">
        <div class="text-center p-3">
            © 2025 github: MARCO-Ferrarese. Tutti i diritti riservati.
            <a class="text-dark" href="#">Privacy Policy</a>
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous">
    </script>
</body>


</html>
