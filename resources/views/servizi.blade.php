 <x-main>
     <x-slot name="qui">

         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

         <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
     </x-slot>
     <section id="servizi" class="py-5 bg-light">
         <div class="container">
             <div class="text-center mb-5">
                 <h2 class="fw-bold">I Nostri Servizi</h2>
                 <p class="text-muted">
                     Offriamo un portafoglio di servizi altamente specializzati, progettati per rispondere alle esigenze
                     complesse di un mercato in continua evoluzione. La nostra metodologia si basa su un approccio
                     integrato, che combina competenze multidisciplinari e tecnologie all'avanguardia.
                 </p>
             </div>
             <div class="row g-4">
                 {{-- foreach($services as $service){
                echo $service;
                } --}}


                 @forelse($services as $service)
                     <x-card :service="$service" stringa="Dettagli"></x-card>
                 @empty
                     Nessun servizio
                 @endforelse
             </div>
         </div>
     </section>

 </x-main>
