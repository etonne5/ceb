@extends('layouts.main')

@section('content')

<style>
  .dept-card {
    background: rgba(255, 255, 255, 0.05);
    border: 1px solid rgba(255, 255, 255, 0.08);
    border-radius: 16px;
    overflow: hidden;
    transition: transform 0.3s ease, box-shadow 0.3s ease, background-color 0.3s ease;
  }
  .dept-card:hover {
    transform: translateY(-5px);
    background: rgba(255, 255, 255, 0.09);
    box-shadow: 0 12px 30px rgba(0, 0, 0, 0.5) !important;
  }

  .dept-img-container {
    height: 140px;
    width: 100%;
    overflow: hidden;
  }
  .dept-img-container img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s ease;
  }
  .dept-card:hover .dept-img-container img {
    transform: scale(1.08);
  }

  .dept-icon-bottom {
    width: 44px;
    height: 44px;
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
    margin-bottom: 15px;
  }
  .dept-icon-bottom i {
    font-size: 1.2rem !important;
    color: #ffffff !important;
  }

  .btn-dept-more {
    color: rgba(255, 255, 255, 0.8);
    border: 1px solid rgba(255, 255, 255, 0.2);
    background: transparent;
    font-size: 0.8rem;
    font-weight: 500;
    transition: all 0.2s ease;
  }
  .btn-dept-more:hover {
    background: #fff;
    color: #1c2e52 !important;
    border-color: #fff;
  }
</style>

<section id="departements" class="section py-5" style="background-color: #1c2e52;">
  <div class="container">
    
    <!-- En-tête de section -->
    <div class="text-center mb-5">
      <span class="eyebrow" style="color: #ff3b3b; font-weight: 600; text-uppercase: uppercase; letter-spacing: 1px;">Servir</span>
      <h2 class="section-title text-white fw-bold mb-3">Nos Départements & Ministères</h2>
      <p class="section-sub text-white-50" style="max-width: 600px; margin: 0 auto;">
        Découvrez les équipes engagées qui font vivre et rayonner notre communauté au quotidien.
      </p>
    </div>

    <!-- Grille des départements -->
    <div class="row g-4">
      @forelse($departements as $dept)
        <div class="col-md-6 col-lg-4">
          <div class="dept-card h-100">
            <!-- Image du département -->
            <div class="dept-img-container">
              @if($dept->image)
                <img src="{{ asset('storage/' . $dept->image) }}" alt="{{ $dept->nom }}">
              @else
                <div style="width: 100%; height: 100%; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); display: flex; align-items: center; justify-content: center;">
                  <i class="fa-solid fa-church" style="font-size: 3rem; color: white; opacity: 0.5;"></i>
                </div>
              @endif
            </div>

            <!-- Contenu -->
            <div class="p-4 d-flex flex-column h-100">
              <!-- Icône -->
              @if($dept->icone)
                <div class="dept-icon-bottom" style="background-color: {{ $dept->couleur_icone ?? '#667eea' }};">
                  <i class="fa-solid {{ $dept->icone }}"></i>
                </div>
              @endif

              <!-- Titre et description -->
              <h5 class="text-white fw-bold mb-2">{{ $dept->nom }}</h5>
              <p class="text-white-50 small mb-3">{{ $dept->description }}</p>

              <!-- Infos -->
              @if($dept->responsable)
                <div class="mb-2">
                  <span class="badge" style="background-color: {{ $dept->couleur_icone ?? '#667eea' }};">{{ $dept->responsable }}</span>
                </div>
              @endif

              @if($dept->nombre_membres)
                <p class="text-white-50 small mt-auto mb-0">
                  <i class="fa-solid fa-users me-2"></i>{{ $dept->nombre_membres }} membres
                </p>
              @endif

              <!-- Bouton -->
              <button class="btn btn-sm btn-dept-more mt-3 w-100">En savoir plus</button>
            </div>
          </div>
        </div>
      @empty
        <div class="col-12 text-center py-5">
          <p class="text-white-50">Aucun département disponible pour le moment.</p>
        </div>
      @endforelse
    </div>
  </div>
</section>

@endsection