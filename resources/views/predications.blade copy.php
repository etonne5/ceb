@extends('layouts.main')

@section('content')
<!-- ========================================== -->
<!-- SECTION PRÉDICATIONS (FOND BLEU NUITE & TRI ACTIF) -->
<!-- ========================================== -->
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
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: #fff;
    transition: all 0.3s ease;
  }
  .sermon-card .play i {
    color: #ff0000; /* Rouge YouTube officiel */
    background: #fff;
    border-radius: 50%;
    padding: 2px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.4);
  }
  .sermon-card:hover .play i {
    transform: translate(-50%, -50%) scale(1.2); /* Correction du centrage lors de l'animation */
    background: #ff0000;
    color: #fff;
  }
  
  /* Boutons de filtrage sur fond sombre */
  .filter-bar .btn-outline-light {
    border-color: rgba(255, 255, 255, 0.25);
    color: rgba(255, 255, 255, 0.85);
    transition: all 0.2s ease;
  }
  .filter-bar .btn-outline-light:hover,
  .filter-bar .btn-outline-light.active {
    background-color: var(--brand-color, #ff3b3b) !important;
    border-color: var(--brand-color, #ff3b3b) !important;
    color: #fff !important;
  }

  /* Animation fluide lors du filtrage JS */
  .sermon {
    transition: all 0.4s ease;
  }
</style>

<section id="predications" class="section py-5" style="background-color: #1c2e52;">
  <div class="container">
    
    <!-- En-tête de la section -->
    <div class="text-center mb-5">
      <span class="eyebrow" style="color: #ff3b3b; font-weight: 600; text-uppercase: uppercase; letter-spacing: 1px;">Enseignements</span>
   
      <p class="section-sub text-white-50" style="max-width: 600px; margin: 0 auto;">
        Nourrissez votre foi. Parcourez, filtrez et écoutez les enseignements inspirants dispensés au Centre Évangélique Béthesda.
      </p>
      
      <!-- Barre de Filtres stylisée pour le fond sombre -->
      <div class="filter-bar d-inline-flex flex-wrap justify-content-center gap-2 mt-4">
        <button class="btn btn-outline-light active rounded-pill px-4" data-filter="all">Toutes</button>
        <button class="btn btn-outline-light rounded-pill px-4" data-filter="recent">Récentes</button>
        <button class="btn btn-outline-light rounded-pill px-4" data-filter="popular">Populaires</button>
        <button class="btn btn-outline-light rounded-pill px-4" data-filter="series">Séries / Thèmes</button>
      </div>
    </div>

    <!-- Grille des Vidéos -->
    <div class="row g-4" id="sermons">
      
      <!-- Sermon 1 - Récent -->
      <div class="col-md-6 col-lg-4 sermon" data-category="recent">
        <div class="sermon-card h-100">
          <div class="thumb">
            <img src="https://img.youtube.com/vi/AbUSJSYuAL0/mqdefault.jpg" alt="La foi qui déplace les montagnes" />
            <a class="play stretched-link" target="_blank" href="https://youtube.com/watch?v=AbUSJSYuAL0" aria-label="Lire la vidéo">
              <i class="fa-brands fa-youtube fa-2x"></i>
            </a>
          </div>
          <div class="p-4">
            <span class="badge bg-danger mb-2" style="font-size: 0.75rem;">Dernier message</span>
            <h5 class="fw-bold text-white mb-2" style="font-size: 1.15rem; line-height: 1.4;">La foi qui déplace les montagnes</h5>
            <div class="meta text-white-50 small mb-3" style="font-size: 0.8rem;">
              <i class="fa-regular fa-calendar me-1"></i> Mai 2026 · <i class="fa-regular fa-clock ms-2 me-1"></i> CEB Brazzaville
            </div>
            <div class="pt-2" style="border-top: 1px solid rgba(255,255,255,0.08); color: #3b82f6; font-weight: 600; font-size: 0.9rem;">
              Bishop Serge Aimé DZABATOU‑ECKO
            </div>
          </div>
        </div>
      </div>
      
      <!-- Sermon 2 - Populaire -->
      <div class="col-md-6 col-lg-4 sermon" data-category="popular">
        <div class="sermon-card h-100">
          <div class="thumb">
            <img src="https://images.unsplash.com/photo-1515162305285-0293e4767cc2?auto=format&fit=crop&q=80&w=600&h=400" alt="Vivre dans la grâce divine" />
            <a class="play stretched-link" target="_blank" href="https://youtube.com/votrechaine" aria-label="Lire la vidéo">
              <i class="fa-brands fa-youtube fa-2x"></i>
            </a>
          </div>
          <div class="p-4">
            <span class="badge bg-primary mb-2" style="font-size: 0.75rem;">Plus écouté</span>
            <h5 class="fw-bold text-white mb-2" style="font-size: 1.15rem; line-height: 1.4;">Vivre dans la grâce divine – Partie 1</h5>
            <div class="meta text-white-50 small mb-3" style="font-size: 0.8rem;">
              <i class="fa-regular fa-calendar me-1"></i> Impactant · <i class="fa-regular fa-star ms-2 me-1"></i> Recommandé
            </div>
            <div class="pt-2" style="border-top: 1px solid rgba(255,255,255,0.08); color: #3b82f6; font-weight: 600; font-size: 0.9rem;">
              Bishop Serge Aimé DZABATOU‑ECKO
            </div>
          </div>
        </div>
      </div>
      
      <!-- Sermon 3 - Série -->
      <div class="col-md-6 col-lg-4 sermon" data-category="series">
        <div class="sermon-card h-100">
          <div class="thumb">
            <img src="https://images.unsplash.com/photo-1504052434569-70ad58565b90?auto=format&fit=crop&q=80&w=600&h=400" alt="Les fondements de la prière efficace" />
            <a class="play stretched-link" target="_blank" href="https://youtube.com/votrechaine" aria-label="Lire la vidéo">
              <i class="fa-brands fa-youtube fa-2x"></i>
            </a>
          </div>
          <div class="p-4">
            <span class="badge bg-warning text-dark mb-2" style="font-size: 0.75rem;">Série d'Enseignements</span>
            <h5 class="fw-bold text-white mb-2" style="font-size: 1.15rem; line-height: 1.4;">Les fondements de la prière efficace</h5>
            <div class="meta text-white-50 small mb-3" style="font-size: 0.8rem;">
              <i class="fa-regular fa-folder me-1"></i> Module 1 · <i class="fa-solid fa-layer-group ms-2 me-1"></i> Profond
            </div>
            <div class="pt-2" style="border-top: 1px solid rgba(255,255,255,0.08); color: #3b82f6; font-weight: 600; font-size: 0.9rem;">
              Corps Pastoral CEB
            </div>
          </div>
        </div>
      </div>

    </div>

    <!-- Bouton d'action principal de redirection YouTube -->
    <div class="text-center mt-5">
      <a class="btn btn-brand btn-lg rounded-pill px-5 py-3 text-white fw-bold shadow-sm" target="_blank" href="https://youtube.com/votrechaine" style="background-color: #ff3b3b; border: none; transition: transform 0.2s ease;">
        <i class="fa-brands fa-youtube me-2"></i> Rejoindre la communauté sur YouTube
      </a>
    </div>
    
  </div>
</section>

<!-- ========================================== -->
<!-- JAVASCRIPT DU FILTRAGE DES PRÉDICATIONS   -->
<!-- ========================================== -->
<script>
  document.addEventListener("DOMContentLoaded", function () {
    const filterButtons = document.querySelectorAll('.filter-bar button');
    const sermonCards = document.querySelectorAll('.sermon');

    filterButtons.forEach(button => {
      button.addEventListener('click', function () {
        // 1. Gestion des états graphiques des boutons
        filterButtons.forEach(btn => btn.classList.remove('active'));
        this.classList.add('active');

        // 2. Acquisition de la clé de tri
        const selectedFilter = this.getAttribute('data-filter');

        // 3. Traitement algorithmique d'affichage
        sermonCards.forEach(card => {
          const cardCategory = card.getAttribute('data-category');

          if (selectedFilter === 'all' || cardCategory === selectedFilter) {
            card.style.display = 'block';
            setTimeout(() => {
              card.style.opacity = '1';
              card.style.transform = 'scale(1)';
            }, 50);
          } else {
            card.style.opacity = '0';
            card.style.transform = 'scale(0.9)';
            setTimeout(() => {
              card.style.display = 'none';
            }, 300);
          }
        });
      });
    });
  });
</script>
@endsection