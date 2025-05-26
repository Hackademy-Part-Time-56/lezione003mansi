  <x-main>

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
                      specialistica. La nostra filosofia si fonda sulla centralità della persona, sulla valorizzazione
                      del
                      capitale umano e sulla continua ricerca dell’eccellenza. Operiamo secondo principi di etica,
                      trasparenza e responsabilità sociale, promuovendo partnership durature e relazioni di fiducia con
                      i
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
                          richieste, garantendo la massima riservatezza e professionalità nella gestione dei dati
                          forniti.
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
  </x-main>
