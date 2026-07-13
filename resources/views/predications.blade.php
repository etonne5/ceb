@extends('layouts.main')

@section('content')

<style>
  /* Styles spécifiques pour les miniatures YouTube */
  .sermon-card {
    background: rgba(255, 255, 255, 0.06);
    border: 1px solid rgba(255, 255, 255, 0.1);
    border-radius: 15px;
    overflow: hidden;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }
  .sermon-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3) !important;
  }
  .sermon-card .thumb {
    position: relative;
    overflow: hidden;
    background-color: #000;
  }
  .sermon-card .thumb img {
    width: 100%;
    height: 210px;
    object-fit: cover;
    transition: transform 0.3s ease;
    opacity: 0.8;
  }
  .sermon-card:hover .thumb img {
    transform: scale(1.05);
    opacity: 0.65;
  }
  .sermon-card .play {
    position: absolute;
    inset: 0;
    display: grid;
    place-items: center;
    opacity: 0;
    transition: .3s;
    background: linear-gradient(180deg, rgba(2,6,23,.0), rgba(2,6,23,.4));
  }
  .sermon-card:hover .play {
    opacity: 1;
  }
  .sermon-card .play i {
    color: #ff0000;
    background: #fff;
    border-radius: 50%;
    padding: 12px;
    font-size: 24px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.4);
  }
  .sermon-card .meta {
    color: rgba(255, 255, 255, 0.6);
    font-size: .9rem;
  }

  /* Boutons de filtrage */
  .filter-bar .btn-outline-light {
    border-color: rgba(255, 255, 255, 0.25);
    color: rgba(255, 255, 255, 0.85);
    transition: all 0.2s ease;
  }
  .filter-bar .btn-outline-light:hover,
  .filter-bar .btn-outline-light.active {
    background-color: #ff3b3b !important;
    border-color: #ff3b3b !important;
    color: #fff !important;
  }

  .sermon {
    transition: all 0.4s ease;
  }
</style>

<section id="predications" class="section py-5" style="background-color: #1c2e52;">
  <div class="container">
    
    <!-- En-tête de la section -->
    <div class="text-center mb-5">
      <span class="eyebrow" style="color: #ff3b3b; font-weight: 600; text-uppercase: uppercase; letter-spacing: 1px;">Enseignements</span>
      <h2 class="section-title text-white fw-bold mb-3">Prédications & Enseignements</h2>
      <p class="section-sub text-white-50" style="max-width: 600px; margin: 0 auto;">
        Découvrez nos dernières prédications et enseignements bibliques pour vous édifier spirituellement.
      </p>
    </div>

    <!-- Filtres par catégorie -->
    <div class="filter-bar d-flex justify-content-center gap-2 mb-5 flex-wrap">
      <button class="btn btn-outline-light btn-sm active" data-filter="all">Tous</button>
      <button class="btn btn-outline-light btn-sm" data-filter="Enseignement">Enseignement</button>
      <button class="btn btn-outline-light btn-sm" data-filter="Prédication">Prédication</button>
      <button class="btn btn-outline-light btn-sm" data-filter="Étude Biblique">Étude Biblique</button>
      <button class="btn btn-outline-light btn-sm" data-filter="Témoignage">Témoignage</button>
    </div>

    <!-- Grille des sermons -->
    <div class="row g-4">
      @forelse($sermons as $sermon)
        <div class="col-md-6 col-lg-4 sermon" data-category="{{ $sermon->categorie }}">
          <div class="sermon-card">
            <div class="thumb">
              @if($sermon->youtube_id)
                <img src="https://img.youtube.com/vi/{{ $sermon->youtube_id }}/maxresdefault.jpg" alt="{{ $sermon->titre }}">
                <div class="play">
                  <i class="fa-solid fa-play"></i>
                </div>
              @else
                <img src="https://via.placeholder.com/400x225?text=Sermon" alt="{{ $sermon->titre }}">
              @endif
            </div>
            <div class="p-3">
              <span class="badge bg-danger mb-2">{{ $sermon->categorie }}</span>
              <h5 class="text-white fw-bold mb-2">{{ $sermon->titre }}</h5>
              <p class="text-white-50 small mb-2">{{ $sermon->description }}</p>
              <div class="d-flex justify-content-between align-items-center">
                <span class="meta">
                  <i class="fa-regular fa-user me-1"></i>{{ $sermon->orateur }}
                </span>
                <span class="meta">
                  <i class="fa-regular fa-calendar me-1"></i>{{ $sermon->date_sermon?->format('d/m/Y') }}
                </span>
              </div>
              @if($sermon->youtube_id)
                <a href="https://youtube.com/watch?v={{ $sermon->youtube_id }}" target="_blank" class="btn btn-sm btn-danger mt-3 w-100">
                  <i class="fa-brands fa-youtube me-2"></i>Regarder
                </a>
              @endif
            </div>
          </div>
        </div>
      @empty
        <div class="col-12 text-center py-5">
          <p class="text-white-50">Aucun sermon disponible pour le moment.</p>
        </div>
      @endforelse
    </div>

    <!-- Pagination -->
    @if($sermons->hasPages())
      <div class="d-flex justify-content-center mt-5">
        {{ $sermons->links() }}
      </div>
    @endif
  </div>
</section>

<script>
  document.querySelectorAll('.filter-bar .btn').forEach(btn => {
    btn.addEventListener('click', function() {
      // Activer le bouton
      document.querySelectorAll('.filter-bar .btn').forEach(b => b.classList.remove('active'));
      this.classList.add('active');

      // Filtrer les sermons
      const filter = this.dataset.filter;
      document.querySelectorAll('.sermon').forEach(sermon => {
        if (filter === 'all' || sermon.dataset.category === filter) {
          sermon.style.display = 'block';
        } else {
          sermon.style.display = 'none';
        }
      });
    });
  });
</script>

@endsection