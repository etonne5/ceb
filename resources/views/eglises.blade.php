@extends('layouts.main')

@section('content')

<style>
  .card-continent {
    background: rgba(255, 255, 255, 0.05);
    border: 1px solid rgba(255, 255, 255, 0.08);
    border-radius: 16px;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    overflow: hidden;
  }
  .card-continent:hover {
    transform: translateY(-5px);
    background: rgba(255, 255, 255, 0.08);
    box-shadow: 0 12px 30px rgba(0, 0, 0, 0.4) !important;
  }

  .country-banner {
    width: 100%;
    height: 110px;
    overflow: hidden;
    border-radius: 8px;
    margin-bottom: 12px;
    position: relative;
    border: 1px solid rgba(255, 255, 255, 0.05);
  }
  .country-banner img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.4s ease;
  }
  .card-continent:hover .country-banner img {
    transform: scale(1.06);
  }

  .card-continent .list-group-item {
    background: transparent !important;
    color: rgba(255, 255, 255, 0.75) !important;
    border-color: rgba(255, 255, 255, 0.08) !important;
    padding-left: 0;
    padding-right: 0;
  }
</style>

<section id="noseglises" class="section py-5" style="background-color: #1c2e52;">
  <div class="container">
    
    <div class="text-center mb-5">
      <span class="eyebrow" style="color: #ff3b3b; font-weight: 600; text-uppercase: uppercase; letter-spacing: 1px;">Notre présence</span>
      <h2 class="section-title text-white fw-bold mb-3">Nos Églises dans le Monde</h2>
      <p class="section-sub text-white-50" style="max-width: 600px; margin: 0 auto;">
        Le Centre Évangélique Béthesda est présent dans plusieurs pays pour servir et édifier les communautés.
      </p>
    </div>

    <!-- Filtres par pays -->
    <div class="text-center mb-4">
      <button class="btn btn-sm btn-outline-light me-2 mb-2 active" data-filter="all">Tous les pays</button>
      @foreach($eglisesParPays as $pays => $eglises)
        <button class="btn btn-sm btn-outline-light me-2 mb-2" data-filter="{{ $pays }}">{{ $pays }}</button>
      @endforeach
    </div>

    <!-- Grille des églises -->
    <div class="row g-4">
      @forelse($eglises as $eglise)
        <div class="col-md-6 col-lg-4 eglise-card" data-pays="{{ $eglise->pays }}">
          <div class="card-continent h-100">
            <div class="country-banner">
              @if($eglise->image)
                <img src="{{ asset('storage/' . $eglise->image) }}" alt="{{ $eglise->nom }}">
              @else
                <img src="https://via.placeholder.com/400x110?text={{ urlencode($eglise->pays) }}" alt="{{ $eglise->pays }}">
              @endif
            </div>
            <div class="p-3">
              <h6 class="text-white fw-bold mb-2">{{ $eglise->nom }}</h6>
              <ul class="list-group list-group-flush small">
                <li class="list-group-item">
                  <i class="fa-solid fa-location-dot me-2"></i>{{ $eglise->adresse }}, {{ $eglise->code_postal }} {{ $eglise->ville }}
                </li>
                @if($eglise->telephone)
                  <li class="list-group-item">
                    <i class="fa-solid fa-phone me-2"></i>
                    <a href="tel:{{ $eglise->telephone }}" class="text-white-50 text-decoration-none">{{ $eglise->telephone }}</a>
                  </li>
                @endif
                @if($eglise->email)
                  <li class="list-group-item">
                    <i class="fa-solid fa-envelope me-2"></i>
                    <a href="mailto:{{ $eglise->email }}" class="text-white-50 text-decoration-none">{{ $eglise->email }}</a>
                  </li>
                @endif
                @if($eglise->pasteur)
                  <li class="list-group-item">
                    <i class="fa-solid fa-person me-2"></i>{{ $eglise->pasteur }}
                  </li>
                @endif
              </ul>
              @if($eglise->description)
                <p class="text-white-50 small mt-3">{{ $eglise->description }}</p>
              @endif
            </div>
          </div>
        </div>
      @empty
        <div class="col-12 text-center py-5">
          <p class="text-white-50">Aucune église disponible pour le moment.</p>
        </div>
      @endforelse
    </div>
  </div>
</section>

<script>
  document.querySelectorAll('[data-filter]').forEach(btn => {
    btn.addEventListener('click', function() {
      const filter = this.dataset.filter;
      document.querySelectorAll('[data-filter]').forEach(b => b.classList.remove('active'));
      this.classList.add('active');

      document.querySelectorAll('.eglise-card').forEach(card => {
        if (filter === 'all' || card.dataset.pays === filter) {
          card.style.display = 'block';
        } else {
          card.style.display = 'none';
        }
      });
    });
  });
</script>

@endsection