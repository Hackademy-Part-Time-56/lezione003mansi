<x-main>
    <x-slot name="title">
        Ciccio
    </x-slot>

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
</x-main>
