@extends('layouts.main')

@section('content')
<!-- INCLUSION DE FONT AWESOME POUR LE RENDU DES ICÔNES -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

<!-- ========================================== -->
<!-- SECTION DÉPARTEMENTS (ICÔNES EN BAS)      -->
<!-- ========================================== -->
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
  
  /* Image d'illustration supérieure */
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

  /* Bloc Icône positionné en bas, avant le bouton */
  .dept-icon-bottom {
    width: 44px;
    height: 44px;
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
    margin-bottom: 15px; /* Espace par rapport au bouton */
  }
  .dept-icon-bottom i {
    font-size: 1.2rem !important;
    color: #ffffff !important; /* Force l'icône en blanc pur */
  }

  /* Bouton En savoir plus */
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
     
      <p class="section-sub text-white-50" style="max-width: 600px; margin: 0 auto;">
        Découvrez les équipes engagées qui font vivre et rayonner notre communauté au quotidien.
      </p>
    </div>

    <!-- Grille des Départements -->
    <div class="row g-4">
      
      <!-- 1. Diaconat -->
      <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <div class="dept-card h-100 d-flex flex-column justify-content-between">
          <div>
            <div class="dept-img-container">
              <img src="https://images.unsplash.com/photo-1532629345422-7515f3d16bb8?auto=format&fit=crop&q=80&w=400" alt="Diaconat">
            </div>
            <div class="p-3">
              <h6 class="fw-bold text-white mb-1">Diaconat</h6>
              <small class="text-white-50 d-block mb-3" style="font-size: 0.75rem;">Responsable département</small>
              <p class="mb-0 text-white-50 small" style="line-height: 1.4;">Finances, Sainte Cène, culte matinal, mariage, décoration, couples.</p>
            </div>
          </div>
          <div class="p-3 pt-0">
            <div class="dept-icon-bottom" style="background-color: #3b82f6;">
              <i class="fa-solid fa-hand-holding-heart"></i>
            </div>
            <a href="/departements/diaconat" class="btn btn-sm btn-dept-more w-100 rounded-pill">En savoir plus</a>
          </div>
        </div>
      </div>

      <!-- 2. Intercession -->
      <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <div class="dept-card h-100 d-flex flex-column justify-content-between">
          <div>
            <div class="dept-img-container">
              <img src="https://images.unsplash.com/photo-1544427928-c49cddee11ba?auto=format&fit=crop&q=80&w=400" alt="Intercession">
            </div>
            <div class="p-3">
              <h6 class="fw-bold text-white mb-1">Intercession</h6>
              <small class="text-white-50 d-block mb-3" style="font-size: 0.75rem;">Responsable département</small>
              <p class="mb-0 text-white-50 small" style="line-height: 1.4;">Veille de prière, chaînes d'intercession, soutien aux requêtes et besoins.</p>
            </div>
          </div>
          <div class="p-3 pt-0">
            <div class="dept-icon-bottom" style="background-color: #f59e0b;">
              <i class="fa-solid fa-hands-praying"></i>
            </div>
            <a href="/departements/intercession" class="btn btn-sm btn-dept-more w-100 rounded-pill">En savoir plus</a>
          </div>
        </div>
      </div>

      <!-- 3. Partenariat -->
      <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <div class="dept-card h-100 d-flex flex-column justify-content-between">
          <div>
            <div class="dept-img-container">
              <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?auto=format&fit=crop&q=80&w=400" alt="Partenariat">
            </div>
            <div class="p-3">
              <h6 class="fw-bold text-white mb-1">Partenariat</h6>
              <small class="text-white-50 d-block mb-3" style="font-size: 0.75rem;">Responsable département</small>
              <p class="mb-0 text-white-50 small" style="line-height: 1.4;">Partenaires de vision, projets de développement et extension des missions.</p>
            </div>
          </div>
          <div class="p-3 pt-0">
            <div class="dept-icon-bottom" style="background-color: #10b981;">
              <i class="fa-solid fa-handshake"></i>
            </div>
            <a href="/departements/partenariat" class="btn btn-sm btn-dept-more w-100 rounded-pill">En savoir plus</a>
          </div>
        </div>
      </div>

      <!-- 4. Protocole & Sécurité -->
      <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <div class="dept-card h-100 d-flex flex-column justify-content-between">
          <div>
            <div class="dept-img-container">
              <img src="https://images.unsplash.com/photo-1540575467063-178a50c2df87?auto=format&fit=crop&q=80&w=400" alt="Protocole">
            </div>
            <div class="p-3">
              <h6 class="fw-bold text-white mb-1">Protocole & Sécurité</h6>
              <small class="text-white-50 d-block mb-3" style="font-size: 0.75rem;">Responsable département</small>
              <p class="mb-0 text-white-50 small" style="line-height: 1.4;">Accueil des fidèles, orientation des invités et logistique sécuritaire.</p>
            </div>
          </div>
          <div class="p-3 pt-0">
            <div class="dept-icon-bottom" style="background-color: #06b6d4;">
              <i class="fa-solid fa-user-shield"></i>
            </div>
            <a href="/departements/protocole" class="btn btn-sm btn-dept-more w-100 rounded-pill">En savoir plus</a>
          </div>
        </div>
      </div>

      <!-- 5. JMB -->
      <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <div class="dept-card h-100 d-flex flex-column justify-content-between">
          <div>
            <div class="dept-img-container">
              <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&q=80&w=400" alt="Jeunesse">
            </div>
            <div class="p-3">
              <h6 class="fw-bold text-white mb-1">Jeunesse (J.M.B)</h6>
              <small class="text-white-50 d-block mb-3" style="font-size: 0.75rem;">Responsable département</small>
              <p class="mb-0 text-white-50 small" style="line-height: 1.4;">Évangélisation en extérieur, rassemblements de jeunesse et discipulat.</p>
            </div>
          </div>
          <div class="p-3 pt-0">
            <div class="dept-icon-bottom" style="background-color: #ef4444;">
              <i class="fa-solid fa-fire"></i>
            </div>
            <a href="/departements/jmb" class="btn btn-sm btn-dept-more w-100 rounded-pill">En savoir plus</a>
          </div>
        </div>
      </div>

      <!-- 6. ECODIM -->
      <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <div class="dept-card h-100 d-flex flex-column justify-content-between">
          <div>
            <div class="dept-img-container">
              <img src="https://images.unsplash.com/photo-1484662021336-7d8817a66ff3?auto=format&fit=crop&q=80&w=400" alt="ECODIM">
            </div>
            <div class="p-3">
              <h6 class="fw-bold text-white mb-1">ECODIM</h6>
              <small class="text-white-50 d-block mb-3" style="font-size: 0.75rem;">Responsable département</small>
              <p class="mb-0 text-white-50 small" style="line-height: 1.4;">École du dimanche : apprentissage ludique et fondements bibliques pour enfants.</p>
            </div>
          </div>
          <div class="p-3 pt-0">
            <div class="dept-icon-bottom" style="background-color: #a855f7;">
              <i class="fa-solid fa-child-reaching"></i>
            </div>
            <a href="/departements/ecodim" class="btn btn-sm btn-dept-more w-100 rounded-pill">En savoir plus</a>
          </div>
        </div>
      </div>

      <!-- 7. Social -->
      <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <div class="dept-card h-100 d-flex flex-column justify-content-between">
          <div>
            <div class="dept-img-container">
              <img src="https://images.unsplash.com/photo-1488521787991-ed7bbaae773c?auto=format&fit=crop&q=80&w=400" alt="Social">
            </div>
            <div class="p-3">
              <h6 class="fw-bold text-white mb-1">Département Social</h6>
              <small class="text-white-50 d-block mb-3" style="font-size: 0.75rem;">Responsable département</small>
              <p class="mb-0 text-white-50 small" style="line-height: 1.4;">Actions de solidarité, banques alimentaires et assistance aux personnes vulnérables.</p>
            </div>
          </div>
          <div class="p-3 pt-0">
            <div class="dept-icon-bottom" style="background-color: #22c55e;">
              <i class="fa-solid fa-basket-shopping"></i>
            </div>
            <a href="/departements/social" class="btn btn-sm btn-dept-more w-100 rounded-pill">En savoir plus</a>
          </div>
        </div>
      </div>

      <!-- 8. Formation -->
      <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <div class="dept-card h-100 d-flex flex-column justify-content-between">
          <div>
            <div class="dept-img-container">
              <img src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?auto=format&fit=crop&q=80&w=400" alt="Formation">
            </div>
            <div class="p-3">
              <h6 class="fw-bold text-white mb-1">Formation</h6>
              <small class="text-white-50 d-block mb-3" style="font-size: 0.75rem;">Responsable département</small>
              <p class="mb-0 text-white-50 small" style="line-height: 1.4;">Cours de baptêmes, affermissements doctrinaux et école des leaders.</p>
            </div>
          </div>
          <div class="p-3 pt-0">
            <div class="dept-icon-bottom" style="background-color: #ec4899;">
              <i class="fa-solid fa-graduation-cap"></i>
            </div>
            <a href="/departements/formation" class="btn btn-sm btn-dept-more w-100 rounded-pill">En savoir plus</a>
          </div>
        </div>
      </div>

      <!-- 9. Musique & Matériel -->
      <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <div class="dept-card h-100 d-flex flex-column justify-content-between">
          <div>
            <div class="dept-img-container">
              <img src="https://images.unsplash.com/photo-1511192336575-5a79af67a629?auto=format&fit=crop&q=80&w=400" alt="Musique">
            </div>
            <div class="p-3">
              <h6 class="fw-bold text-white mb-1">Musique & Matériel</h6>
              <small class="text-white-50 d-block mb-3" style="font-size: 0.75rem;">Responsable département</small>
              <p class="mb-0 text-white-50 small" style="line-height: 1.4;">Chorales, orchestration de la louange, gestion de la sonorisation et de la vidéo.</p>
            </div>
          </div>
          <div class="p-3 pt-0">
            <div class="dept-icon-bottom" style="background-color: #f43f5e;">
              <i class="fa-solid fa-music"></i>
            </div>
            <a href="/departements/musique" class="btn btn-sm btn-dept-more w-100 rounded-pill">En savoir plus</a>
          </div>
        </div>
      </div>

      <!-- 10. Mamans -->
      <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <div class="dept-card h-100 d-flex flex-column justify-content-between">
          <div>
            <div class="dept-img-container">
              <img src="https://images.unsplash.com/photo-1551836022-d5d88e9218df?auto=format&fit=crop&q=80&w=400" alt="Mamans">
            </div>
            <div class="p-3">
              <h6 class="fw-bold text-white mb-1">Département des Mamans</h6>
              <small class="text-white-50 d-block mb-3" style="font-size: 0.75rem;">Responsable département</small>
              <p class="mb-0 text-white-50 small" style="line-height: 1.4;">Encadrement des femmes de l'église, réunions de prières familiales et entraide.</p>
            </div>
          </div>
          <div class="p-3 pt-0">
            <div class="dept-icon-bottom" style="background-color: #14b8a6;">
              <i class="fa-solid fa-person-breastfeeding"></i>
            </div>
            <a href="/departements/mamans" class="btn btn-sm btn-dept-more w-100 rounded-pill">En savoir plus</a>
          </div>
        </div>
      </div>

      <!-- 11. Baptêmes -->
      <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <div class="dept-card h-100 d-flex flex-column justify-content-between">
          <div>
            <div class="dept-img-container">
              <img src="https://images.unsplash.com/photo-1574629810360-7efbbe195018?auto=format&fit=crop&q=80&w=400" alt="Baptêmes">
            </div>
            <div class="p-3">
              <h6 class="fw-bold text-white mb-1">Baptêmes</h6>
              <small class="text-white-50 d-block mb-3" style="font-size: 0.75rem;">Responsable département</small>
              <p class="mb-0 text-white-50 small" style="line-height: 1.4;">Suivi spirituel des nouveaux convertis et organisation des baptêmes par immersion.</p>
            </div>
          </div>
          <div class="p-3 pt-0">
            <div class="dept-icon-bottom" style="background-color: #38bdf8;">
              <i class="fa-solid fa-droplet"></i>
            </div>
            <a href="/departements/baptemes" class="btn btn-sm btn-dept-more w-100 rounded-pill">En savoir plus</a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
@endsection