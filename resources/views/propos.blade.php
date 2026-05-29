@extends('layouts.main')

@section('content')
<!-- ========================================== -->
<!-- SECTION À PROPOS COMPLETE (HISTOIRE + VALEURS) -->
<!-- ========================================== -->
<section id="apropos" class="section py-5" style="background-color: #1c2e52;">
  <div class="container">
    <div class="row align-items-center g-4">
      
      <!-- Colonne Image (À gauche) -->
      <div class="col-md-6 text-center">
        <img src="images/logo.png" class="about-img img-fluid" style="max-height: 380px;" alt="CEB à Brazzaville" />
      </div>
      
      <!-- Colonne Contenu (À droite) -->
      <div class="col-md-6 text-white">
        <span class="eyebrow" style="color: #ff3b3b; font-weight: 600; text-uppercase; letter-spacing: 1px;">Qui sommes-nous ?</span>
        <h2 class="section-title fw-bold mb-3 text-white">CENTRE EVANGELIQUE BETHESDA</h2>
        
        <p class="section-sub text-white-50">
          Le CEB est un organe d'évangélisation fondé en avril 1994 à Brazzaville, au Congo, au cœur du mouvement charismatique, sous la conduite du <strong>Bishop Serge Aimé DZABATOU‑ECKO</strong>.
        </p>
        
        <!-- Phrase de Vision Spirituelle -->
        <p class="text-white-50 fst-italic mb-4" style="border-left: 3px solid var(--brand-color, #ff3b3b); padding-left: 15px;">
          "Notre mission est de restaurer les vies par la puissance de l'Évangile, de bâtir des disciples affermis et d'impacter notre nation pour la gloire de Dieu."
        </p>
        
        <!-- Grille des 4 Valeurs Fondamentales (Adaptée au fond sombre) -->
        <div class="row g-3">
          <!-- Valeur 1 -->
          <div class="col-sm-6">
            <div class="p-3 h-100" style="background: rgba(255, 255, 255, 0.07); border: 1px solid rgba(255, 255, 255, 0.1); border-radius: 15px;">
              <div class="d-flex align-items-center mb-2 text-white">
                <i class="fa-solid fa-hands-praying me-2" style="color: #3b82f6;"></i><strong>Foi & Prière</strong>
              </div>
              <p class="mb-0 text-white-50 small">Des temps forts d'intercession et d'adoration pour grandir en Christ.</p>
            </div>
          </div>
          
          <!-- Valeur 2 -->
          <div class="col-sm-6">
            <div class="p-3 h-100" style="background: rgba(255, 255, 255, 0.07); border: 1px solid rgba(255, 255, 255, 0.1); border-radius: 15px;">
              <div class="d-flex align-items-center mb-2 text-white">
                <i class="fa-solid fa-book-bible me-2" style="color: #10b981;"></i><strong>Parole & Formation</strong>
              </div>
              <p class="mb-0 text-white-50 small">Enseignements bibliques profonds, écoles de formation et accompagnement pastoral.</p>
            </div>
          </div>
          
          <!-- Valeur 3 -->
          <div class="col-sm-6">
            <div class="p-3 h-100" style="background: rgba(255, 255, 255, 0.07); border: 1px solid rgba(255, 255, 255, 0.1); border-radius: 15px;">
              <div class="d-flex align-items-center mb-2 text-white">
                <i class="fa-solid fa-heart me-2" style="color: #ef4444;"></i><strong>Amour & Famille</strong>
              </div>
              <p class="mb-0 text-white-50 small">Une communauté unie et chaleureuse pour entourer et fortifier chaque génération.</p>
            </div>
          </div>
          
          <!-- Valeur 4 -->
          <div class="col-sm-6">
            <div class="p-3 h-100" style="background: rgba(255, 255, 255, 0.07); border: 1px solid rgba(255, 255, 255, 0.1); border-radius: 15px;">
              <div class="d-flex align-items-center mb-2 text-white">
                <i class="fa-solid fa-earth-africa me-2" style="color: #f59e0b;"></i><strong>Mission & Impact</strong>
              </div>
              <p class="mb-0 text-white-50 small">Apporter un soutien concret, de la compassion et l'espoir à la ville de Brazzaville.</p>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </div>
</section>

<!-- ========================================== -->
<!-- SOUS-SECTION : LE MOT PASTORAL DU BISHOP   -->
<!-- ========================================== -->
<section id="mot-pastoral" class="section py-5" style="background-color: #162442; border-top: 1px solid rgba(255,255,255,0.05); border-bottom: 1px solid rgba(255,255,255,0.05);">
  <div class="container">
    <div class="row align-items-center g-5">
      
      <!-- Texte de bienvenue (À gauche sur PC, passe en dessous sur Mobile) -->
      <div class="col-md-7 order-2 order-md-1 text-white">
        <span class="eyebrow" style="color: #3b82f6;">Le Message du Berger</span>
        <h2 class="fw-bold mb-3 text-white">Bienvenue dans la maison du Père</h2>
        
        <p class="lead text-white fw-normal mb-3" style="opacity: 0.95;">
          "C'est une joie immense pour moi de vous accueillir sur la plateforme numérique du Centre Évangélique Béthesda."
        </p>
        
        <p class="text-white-50">
          Depuis 1994, notre appel à Brazzaville reste inchangé : proclamer un Évangile de puissance, de restauration et d’espérance. Notre église n'est pas simplement un bâtiment, c'est une grande famille où chaque âme a de la valeur aux yeux de Dieu. 
        </p>
        
        <p class="text-white-50">
          Que vous soyez un chrétien affermi à la recherche d'une communauté pour servir, ou une personne en quête de réponses spirituelles, sachez que vous avez votre place parmi nous. Nous prions pour que votre passage ici soit le début d'une expérience profonde avec le Seigneur Jésus-Christ.
        </p>

        <!-- Bloc Signature -->
        <div class="mt-4 pt-2">
          <h5 class="mb-0 fw-bold text-white">Bishop Serge Aimé DZABATOU‑ECKO</h5>
          <small class="text-white-50 text-uppercase tracking-wider" style="font-size: 0.75rem; letter-spacing: 1px;">Visionnaire & Pasteur Principal du CEB</small>
        </div>

        <!-- Bouton d'action adapté au thème sombre -->
        <div class="mt-4">
          <a href="#departements" class="btn btn-sm btn-outline-light rounded-pill px-4 py-2" style="border-color: rgba(255,255,255,0.3);">
            <i class="fa-solid fa-users me-2"></i> Découvrir nos ministères
          </a>
        </div>
      </div>

      <!-- Photo du Bishop (À droite sur PC, passe au-dessus sur Mobile) -->
      <div class="col-md-5 order-1 order-md-2 text-center">
        <div class="position-relative d-inline-block">
          <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&q=80&w=400&h=520" 
               alt="Bishop Serge Aimé DZABATOU-ECKO" 
               class="img-fluid shadow-lg" 
               style="border-radius: 30px; border: 5px solid rgba(255,255,255,0.1); max-height: 420px; width: 100%; object-fit: cover; object-position: top;">
          
          <!-- Petit Badge Géographique Décoratif -->
          <div class="position-absolute bottom-0 start-0 m-3 text-white px-3 py-2 rounded-pill small shadow-sm fw-bold" style="font-size: 0.8rem; background-color: rgba(15, 23, 42, 0.85) !important; backdrop-filter: blur(4px);">
            <i class="fa-solid fa-location-dot me-1 text-danger"></i> Brazzaville, Congo
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
@endsection
