<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>home</title>
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

    {{-- section soluzioni --}}

    <section class="container py-5">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h1 class="display-4 fw-bold mb-4">Soluzioni Innovative per la Crescita del Tuo Business</h1>
                <p class="lead">
                    Siamo una realtà specializzata nell'offerta di servizi ad alto valore aggiunto, orientati a
                    supportare imprese e professionisti nel percorso di digitalizzazione e sviluppo competitivo. La
                    nostra missione consiste nell'integrare conoscenze avanzate e tecnologie emergenti, promuovendo
                    l’efficienza, la sostenibilità e l’innovazione strategica.
                </p>
                <a href="{{ route('services') }}" class="btn btn-primary btn-lg mt-3">Scopri i nostri servizi</a>
            </div>
            <div class="col-md-6 text-center">
                <img src="https://picsum.photos/400/600?grayscale" class="img-fluid rounded-5"
                    alt="Innovazione e tecnologia">
            </div>
        </div>
    </section>

    {{-- section consulenza --}}

    <section class="py-5 bg-primary text-white">
        <div class="container text-center">
            <h2 class="fw-bold mb-3">Richiedi una Consulenza Personalizzata</h2>
            <p class="lead mb-4">Contattaci per ricevere una valutazione preliminare senza impegno: il nostro team è a
                disposizione per analizzare le tue esigenze e proporre soluzioni su misura.</p>
            <a href="{{ route('howarewe') }}" class="btn btn-outline-light btn-lg">Contattaci Ora</a>
        </div>
    </section>
    {{-- end section consulenza --}}

    {{-- section domande --}}


    <section id="faq" class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold">Domande Frequenti</h2>
                <p class="text-muted">Alcune delle richieste più frequenti che riceviamo dai nostri clienti e partner.
                </p>
            </div>
            <div class="accordion" id="faqAccordion">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="faq1">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                            Quali sono i tempi di implementazione dei servizi?
                        </button>
                    </h2>
                    <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="faq1"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            I tempi variano in funzione della complessità progettuale e delle specifiche esigenze del
                            cliente. Ogni progetto è preceduto da una fase di analisi e pianificazione dettagliata.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="faq2">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                            Offrite percorsi formativi personalizzati?
                        </button>
                    </h2>
                    <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="faq2"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Sì, progettiamo soluzioni formative ad hoc, calibrate sulle specificità di ciascun contesto
                            organizzativo e sugli obiettivi di sviluppo professionale dei partecipanti.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- end section domande --}}



    {{-- footer --}}

    <footer class="bg-light text-center text-lg-start">
        <div class="text-center p-3">
            © 2025 github: Alex-Ferrarese. Tutti i diritti riservati.
            <a class="text-dark" href="#">Privacy Policy</a>
        </div>
    </footer>

    {{-- end footer --}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous">
    </script>
</body>


</html>
