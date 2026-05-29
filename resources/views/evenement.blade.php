@extends('layouts.main')

@section('content')

<!-- ========================================== -->
<!-- SECTION ÉVÉNEMENTS COMPLETE (FOND BLEU NUITE) -->
<!-- ========================================== -->
<style>
  .event-card {
    background: rgba(255, 255, 255, 0.06);
    border: 1px solid rgba(255, 255, 255, 0.1);
    border-radius: 15px;
    overflow: hidden;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }
  .event-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 12px 25px rgba(0, 0, 0, 0.3) !important;
  }
  .event-card img {
    height: 230px;
    object-fit: cover;
    width: 100%;
    opacity: 0.9;
  }
  /* Badge de date stylisé posé sur l'image */
  .date-badge {
    position: absolute;
    top: 15px;
    left: 15px;
    background: var(--brand-color, #ff3b3b);
    color: #fff;
    padding: 8px 14px;
    border-radius: 12px;
    text-align: center;
    font-weight: bold;
    line-height: 1.1;
    box-shadow: 0 4px 12px rgba(0,0,0,0.3);
    z-index: 2;
  }
  .date-badge .d {
    display: block;
    font-size: 1.5rem;
  }
  .date-badge .m {
    display: block;
    font-size: 0.75rem;
    text-uppercase: uppercase;
    letter-spacing: 1px;
  }
  
  /* Boutons de filtrage adaptés au fond sombre */
  .filter-bar .btn-outline-light {
    border-color: rgba(255, 255, 255, 0.25);
    color: rgba(255, 255, 255, 0.85);
    font-weight: 500;
    transition: all 0.2s ease;
  }
  .filter-bar .btn-outline-light:hover,
  .filter-bar .btn-outline-light.active {
    background-color: var(--brand-color, #ff3b3b) !important;
    border-color: var(--brand-color, #ff3b3b) !important;
    color: #fff !important;
  }
  .event-item {
    transition: all 0.4s ease;
  }
</style>

<section id="evenements" class="section py-5" style="background-color: #1c2e52;">
  <div class="container">
    
    <!-- En-tête de section -->
    <div class="text-center mb-5">
      <span class="eyebrow" style="color: #ff3b3b; font-weight: 600; text-uppercase: uppercase; letter-spacing: 1px;">Agenda</span>
     
      <p class="section-sub text-white-50" style="max-width: 600px; margin: 0 auto;">
        Planifiez votre venue ! Découvrez les programmes, cultes réguliers, conférences et élans de solidarité du Centre Évangélique Béthesda.
      </p>
      
      <!-- Barre de Tri Avancée -->
      <div class="filter-bar d-inline-flex flex-wrap justify-content-center gap-2 mt-4">
        <button class="btn btn-outline-light active rounded-pill px-4" data-filter="all">Tout l'agenda</button>
        <button class="btn btn-outline-light rounded-pill px-4" data-filter="avenir">À venir uniquement</button>
        <button class="btn btn-outline-light rounded-pill px-4" data-filter="culte">Cultes & Fêtes</button>
        <button class="btn btn-outline-light rounded-pill px-4" data-filter="conference">Conférences & Séminaires</button>
        <button class="btn btn-outline-light rounded-pill px-4" data-filter="special">Jeunesse & Social</button>
      </div>
    </div>

    <!-- Grille des Événements Complète -->
    <div class="row g-4" id="events-grid">
      
      <!-- Événement 1 : Culte Dominical Spécial (À venir) -->
      <div class="col-md-6 col-lg-4 event-item" data-type="culte" data-time="avenir">
        <div class="event-card h-100 position-relative d-flex flex-column justify-content-between">
          <div class="position-relative">
            <img src="https://images.unsplash.com/photo-1515162305285-0293e4767cc2?auto=format&fit=crop&q=80&w=600&h=400" alt="Culte de Célébration Dominicale" />
            <div class="date-badge">
              <span class="d">31</span>
              <span class="m">Mai</span>
            </div>
          </div>
          <div class="p-4 d-flex flex-column flex-grow-1 justify-content-between">
            <div class="mb-4">
              <span class="badge bg-danger mb-2">Culte Mensuel</span>
              <h5 class="fw-bold text-white mb-2" style="font-size: 1.2rem;">Grand Culte d'Actions de Grâce</h5>
              <ul class="list-unstyled text-white-50 small mb-3">
                <li class="mb-1"><i class="fa-regular fa-clock me-2" style="color: #3b82f6;"></i> 09h00 – 11h30</li>
                <li><i class="fa-solid fa-location-dot me-2" style="color: #ff3b3b;"></i> Temple Central (Brazzaville)</li>
              </ul>
              <p class="mb-0 text-white-50 small" style="line-height: 1.5;">Un rendez-vous d'adoration intense, de témoignages inspirants et de proclamation de la Parole pour clore le mois dans la victoire.</p>
            </div>
            <div>
              <a href="#contact" class="btn btn-sm btn-outline-light rounded-pill px-4" style="border-color: rgba(255,255,255,0.3);">S'y rendre</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Événement 2 : Séminaire / Conférence (À venir) -->
      <div class="col-md-6 col-lg-4 event-item" data-type="conference" data-time="avenir">
        <div class="event-card h-100 position-relative d-flex flex-column justify-content-between">
          <div class="position-relative">
            <img src="https://images.unsplash.com/photo-1504052434569-70ad58565b90?auto=format&fit=crop&q=80&w=600&h=400" alt="Séminaire biblique approfondi" />
            <div class="date-badge">
              <span class="d">08</span>
              <span class="m">Juin</span>
            </div>
          </div>
          <div class="p-4 d-flex flex-column flex-grow-1 justify-content-between">
            <div class="mb-4">
              <span class="badge bg-primary mb-2">Formation</span>
              <h5 class="fw-bold text-white mb-2" style="font-size: 1.2rem;">Séminaire : Affermis dans la Parole</h5>
              <ul class="list-unstyled text-white-50 small mb-3">
                <li class="mb-1"><i class="fa-regular fa-clock me-2" style="color: #3b82f6;"></i> 17h00 – 19h30 (Du 08 au 12)</li>
                <li><i class="fa-solid fa-location-dot me-2" style="color: #ff3b3b;"></i> Salle de Formation Béthesda</li>
              </ul>
              <p class="mb-0 text-white-50 small" style="line-height: 1.5;">Une semaine d'étude approfondie conçue pour poser des fondations spirituelles inébranlables dans votre marche chrétienne quotidienne.</p>
            </div>
            <div>
              <a href="#contact" class="btn btn-sm btn-outline-light rounded-pill px-4" style="border-color: rgba(255,255,255,0.3);">Réserver sa place</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Événement 3 : Programme Spécial Jeunesse (À venir) -->
      <div class="col-md-6 col-lg-4 event-item" data-type="special" data-time="avenir">
        <div class="event-card h-100 position-relative d-flex flex-column justify-content-between">
          <div class="position-relative">
            <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&q=80&w=600&h=400" alt="Rassemblement de la jeunesse chrétienne" />
            <div class="date-badge">
              <span class="d">20</span>
              <span class="m">Juin</span>
            </div>
          </div>
          <div class="p-4 d-flex flex-column flex-grow-1 justify-content-between">
            <div class="mb-4">
              <span class="badge bg-warning text-dark mb-2">Jeunesse</span>
              <h5 class="fw-bold text-white mb-2" style="font-size: 1.2rem;">Impact Jeunesse CEB 2026</h5>
              <ul class="list-unstyled text-white-50 small mb-3">
                <li class="mb-1"><i class="fa-regular fa-clock me-2" style="color: #3b82f6;"></i> 14h30 – 17h30</li>
                <li><i class="fa-solid fa-location-dot me-2" style="color: #ff3b3b;"></i> Auditorium Central</li>
              </ul>
              <p class="mb-0 text-white-50 small" style="line-height: 1.5;">Panel de discussion, louange urbaine et message percutant. Un espace d’échange pour équiper la nouvelle génération à briller.</p>
            </div>
            <div>
              <a href="#contact" class="btn btn-sm btn-outline-light rounded-pill px-4" style="border-color: rgba(255,255,255,0.3);">Inviter un ami</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Événement 4 : Impact Social (À venir) -->
      <div class="col-md-6 col-lg-4 event-item" data-type="special" data-time="avenir">
        <div class="event-card h-100 position-relative d-flex flex-column justify-content-between">
          <div class="position-relative">
            <img src="https://images.unsplash.com/photo-1488521787991-ed7bbaae773c?auto=format&fit=crop&q=80&w=600&h=400" alt="Action humanitaire et sociale" />
            <div class="date-badge">
              <span class="d">27</span>
              <span class="m">Juin</span>
            </div>
          </div>
          <div class="p-4 d-flex flex-column flex-grow-1 justify-content-between">
            <div class="mb-4">
              <span class="badge bg-success mb-2">Social / Solidarité</span>
              <h5 class="fw-bold text-white mb-2" style="font-size: 1.2rem;">Action Compassion Brazzaville</h5>
              <ul class="list-unstyled text-white-50 small mb-3">
                <li class="mb-1"><i class="fa-regular fa-clock me-2" style="color: #3b82f6;"></i> 08h00 – 13h00</li>
                <li><i class="fa-solid fa-location-dot me-2" style="color: #ff3b3b;"></i> Quartiers Périphériques</li>
              </ul>
              <p class="mb-0 text-white-50 small" style="line-height: 1.5;">Distribution de kits alimentaires et accompagnement des familles vulnérables. Exprimez l'amour du Christ par des actes concrets.</p>
            </div>
            <div>
              <a href="#contact" class="btn btn-sm btn-outline-light rounded-pill px-4" style="border-color: rgba(255,255,255,0.3);">Devenir bénévole</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Événement 5 : Nuit de prière historique (Passé) -->
      <div class="col-md-6 col-lg-4 event-item" data-type="conference" data-time="passe">
        <div class="event-card h-100 position-relative d-flex flex-column justify-content-between" style="opacity: 0.65;">
          <div class="position-relative">
            <img src="https://images.unsplash.com/photo-1445445290350-18a3b86e0b5b?auto=format&fit=crop&q=80&w=600&h=400" alt="Veillée de prière spirituelle nocturne" />
            <!-- Badge grisé car l'événement est passé -->
            <div class="date-badge" style="background: #475569;">
              <span class="d">01</span>
              <span class="m">Mai</span>
            </div>
          </div>
          <div class="p-4 d-flex flex-column flex-grow-1 justify-content-between">
            <div class="mb-4">
              <span class="badge bg-secondary mb-2">Intercession</span>
              <h5 class="fw-bold text-white-50 mb-2" style="font-size: 1.2rem; text-decoration: line-through;">La Grande Nuit de la Traversée</h5>
              <ul class="list-unstyled text-white-50 small mb-3">
                <li class="mb-1"><i class="fa-regular fa-clock me-2"></i> 22h00 – 05h00</li>
                <li><i class="fa-solid fa-location-dot me-2"></i> Esplanade du Temple Central</li>
              </ul>
              <p class="mb-0 text-white-50 small" style="line-height: 1.5;">Une sainte convocation nocturne dédiée au combat spirituel, à la restauration des foyers et aux requêtes urgentes des fidèles.</p>
            </div>
            <div class="d-flex justify-content-between align-items-center">
              <button class="btn btn-sm btn-outline-secondary rounded-pill px-3" disabled style="color: rgba(255,255,255,0.4); border-color: rgba(255,255,255,0.15);">Terminé</button>
              <span class="badge bg-dark text-white-50 mt-1">Édition Passée</span>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ========================================== -->
<!-- SCRIPT JS DE FILTRAGE INSTANTANÉ           -->
<!-- ========================================== -->
<script>
  document.addEventListener("DOMContentLoaded", function () {
    const filterButtons = document.querySelectorAll('.filter-bar button');
    const eventItems = document.querySelectorAll('.event-item');

    filterButtons.forEach(button => {
      button.addEventListener('click', function () {
        // Active le style du bouton en cours
        filterButtons.forEach(btn => btn.classList.remove('active'));
        this.classList.add('active');

        const filterValue = this.getAttribute('data-filter');

        eventItems.forEach(item => {
          const type = item.getAttribute('data-type');
          const time = item.getAttribute('data-time');

          // Logique de masquage / affichage fluide
          if (
            filterValue === 'all' || 
            type === filterValue || 
            (filterValue === 'avenir' && time === 'avenir')
          ) {
            item.style.display = 'block';
            setTimeout(() => {
              item.style.opacity = '1';
              item.style.transform = 'scale(1)';
            }, 50);
          } else {
            item.style.opacity = '0';
            item.style.transform = 'scale(0.95)';
            setTimeout(() => {
              item.style.display = 'none';
            }, 300);
          }
        });
      });
    });
  });
</script>

@endsection