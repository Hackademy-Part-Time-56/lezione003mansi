 {{-- navbar --}}
 <nav class="navbar navbar-expand-lg bg-body-tertiary">
     <div class="container-fluid">
         <a class="navbar-brand" href="#">Logo</a>
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
                     <a class="nav-link {{ Route::is('howarewe') ? 'active' : '' }}" href="{{ route('howarewe') }}">chi
                         siamo</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link {{ Route::is('services') ? 'active' : '' }}"
                         href="{{ route('services') }}">servizi</a>
                 </li>
             </ul>
         </div>
     </div>
 </nav>
