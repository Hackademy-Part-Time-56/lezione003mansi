   <div class="col-md-4">
       <div class="card h-100 shadow-sm border-0 rounded-4">
           <div class="card-body">
               <div class="mb-3">
                   <i class="bi bi-graph-up-arrow fs-1 text-primary"></i>
               </div>
               <h5 class="card-title">{{ $service['title'] }}</h5>
               <p>{{ $service['description'] }}</p>
               {{-- https://www.php.net/manual/it/function.isset.php --}}
               @if (isset($stringa))
                   {{-- <a href="/dettaglio/{{ $service['slug'] }}" class="btn btn-secondary mt-3">Dettagli</a> --}}
                   <a href="{{ route('dettaglio', ['service' => $service['slug']]) }}" class="btn btn-secondary mt-3">
                       {{ $stringa }}</a>
               @else
                   Prezzo: {{ $service['price'] }}
               @endif
           </div>
       </div>
   </div>
