<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>howarewe</title>
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

    <section id="chi-siamo" class="container py-5">
        <div class="row align-items-center">
            <div class="col-md-6">
                <img src="https://picsum.photos/600/400?grayscale" class="img-fluid mb-4 mb-md-0 rounded-5"
                    alt="Il nostro team">
            </div>
            <div class="col-md-6">
                <h2 class="fw-bold mb-3">Chi Siamo</h2>
                <p>
                    Il nostro team è costituito da professionisti con una solida formazione accademica e pluriennale
                    esperienza nei settori della consulenza aziendale, dell’innovazione tecnologica e della formazione
                    specialistica. La nostra filosofia si fonda sulla centralità della persona, sulla valorizzazione del
                    capitale umano e sulla continua ricerca dell’eccellenza. Operiamo secondo principi di etica,
                    trasparenza e responsabilità sociale, promuovendo partnership durature e relazioni di fiducia con i
                    nostri clienti.
                </p>
            </div>
        </div>
    </section>

    {{-- section form --}}

    <section id="contatti" class="py-5 bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h2 class="fw-bold mb-4">Richiedi informazioni</h2>
                    <p class="mb-4">
                        Compila il modulo sottostante per ricevere una consulenza personalizzata o per richiedere
                        ulteriori dettagli sui nostri servizi. Il nostro team risponderà tempestivamente a tutte le
                        richieste, garantendo la massima riservatezza e professionalità nella gestione dei dati forniti.
                    </p>
                    <form>
                        <div class="mb-3">
                            <label for="nome" class="form-label">Nome e Cognome</label>
                            <input type="text" class="form-control" id="nome"
                                placeholder="Inserisci il tuo nome completo" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Indirizzo Email</label>
                            <input type="email" class="form-control" id="email" placeholder="esempio@email.com"
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="azienda" class="form-label">Azienda/Ente (opzionale)</label>
                            <input type="text" class="form-control" id="azienda"
                                placeholder="Inserisci il nome della tua azienda">
                        </div>
                        <div class="mb-3">
                            <label for="messaggio" class="form-label">Messaggio</label>
                            <textarea class="form-control" id="messaggio" rows="5" placeholder="Descrivi brevemente la tua richiesta"
                                required></textarea>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="privacy" required>
                            <label class="form-check-label" for="privacy">
                                Acconsento al trattamento dei dati personali secondo la normativa vigente (<a
                                    href="#">leggi informativa</a>).
                            </label>
                        </div>
                        <button type="submit" class="btn btn-primary">Invia richiesta</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    {{-- end section form --}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous">
    </script>
</body>

</html>
