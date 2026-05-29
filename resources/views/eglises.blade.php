@extends('layouts.main')

@section('content')

<style>
  /* Personnalisation des cartes de continents pour le fond sombre */
  .card-continent {
    background: rgba(255, 255, 255, 0.05);
    border: 1px solid rgba(255, 255, 255, 0.08);
    border-radius: 16px;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    overflow: hidden; /* Requis pour contenir les zooms d'images */
  }
  .card-continent:hover {
    transform: translateY(-5px);
    background: rgba(255, 255, 255, 0.08);
    box-shadow: 0 12px 30px rgba(0, 0, 0, 0.4) !important;
  }

  /* Conteneur d'image pays avec effet de zoom */
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

  /* Rendre les éléments de liste translucides et sans bordure blanche agressive */
  .card-continent .list-group-item {
    background: transparent !important;
    color: rgba(255, 255, 255, 0.75) !important;
    border-color: rgba(255, 255, 255, 0.08) !important;
    padding-left: 0;
    padding-right: 0;
  }

  /* Boîtier pour l'emblème/armoiries du pays */
  .country-emblem-box {
    background: rgba(255, 255, 255, 0.08);
    padding: 4px;
    border-radius: 8px;
    width: 36px;
    height: 36px;
    display: flex;
    align-items: center;
    justify-content: center;
    border: 1px solid rgba(255, 255, 255, 0.1);
  }
  .country-emblem-box img {
    max-width: 100%;
    max-height: 100%;
    object-fit: contain;
  }

  /* Style des puces/boutons de filtrage */
  .church-chip {
    color: rgba(255, 255, 255, 0.8) !important;
    border-color: rgba(255, 255, 255, 0.2) !important;
    transition: all 0.2s ease;
  }
  .church-chip:hover, .church-chip.active {
    background-color: #ffffff !important;
    color: #1c2e52 !important;
    border-color: #ffffff !important;
  }
</style>

<section id="noseglises" class="section py-5" style="background-color: #1c2e52;">
  <div class="container">
    
    <div class="text-center mb-5">
      <span class="eyebrow" style="color: #ff3b3b; font-weight: 600; text-uppercase: uppercase; letter-spacing: 1px;">Réseau</span>
     
    <p class="section-sub text-white-50 mb-2">Découvrez notre implantation à travers tous les continents.</p>
      
      <div class="d-inline-flex gap-2 flex-wrap mt-0">
        <button class="btn btn-sm church-chip active" data-continent="all">Tous</button>
        <button class="btn btn-sm church-chip" data-continent="afrique">Afrique</button>
        <button class="btn btn-sm church-chip" data-continent="europe">Europe</button>
        <button class="btn btn-sm church-chip" data-continent="amerique">Amérique</button>
        <button class="btn btn-sm church-chip" data-continent="asie">Asie</button>
        <button class="btn btn-sm church-chip" data-continent="oceanie">Océanie</button>
      </div>
    </div>

    <div class="row g-4" id="churches">
      
      <div class="col-12 col-md-6 group" data-group="afrique">
        <div class="card-continent p-4 h-100">
          <div class="d-flex align-items-center mb-3 pb-2" style="border-bottom: 1px solid rgba(255,255,255,0.1);">
            <h5 class="mb-0 text-white fw-bold d-flex align-items-center">
              <i class="fa-solid fa-earth-africa me-2 text-info"></i> Afrique
            </h5>
          </div>
          
          <div class="mt-3">
            <div class="country-banner">
              <img src="https://images.unsplash.com/photo-1489493585343-7f62b298904a?auto=format&fit=crop&q=80&w=600" alt="Brazzaville Congo">
            </div>
            <div class="d-flex align-items-center justify-content-between mb-2">
              <h6 class="text-white fw-semibold mb-0 d-flex align-items-center">
                <img src="https://cdn.jsdelivr.net/npm/svg-country-flags@1.2.10/svg/cg.svg" width="22" class="me-2 rounded-1" alt="Congo" /> 
                République du Congo
              </h6>
              <div class="country-emblem-box" title="Armoiries de la République du Congo">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/70/Coat_of_arms_of_the_Republic_of_the_Congo.svg/500px-Coat_of_arms_of_the_Republic_of_the_Congo.svg.png" alt="Armoiries Congo">
              </div>
            </div>
            <ul class="list-group list-group-flush small mb-3">
              <li class="list-group-item d-flex justify-content-between align-items-center">Église de Brazzaville <span class="badge bg-danger">Siège mondial</span></li>
              <li class="list-group-item">Église de Pointe-Noire</li>
            </ul>
          </div>
          
          <div class="mt-4">
            <div class="country-banner">
              <img src="https://images.unsplash.com/photo-1607604276583-eef5d076aa5f?auto=format&fit=crop&q=80&w=600" alt="Kinshasa RDC">
            </div>
            <div class="d-flex align-items-center justify-content-between mb-2">
              <h6 class="text-white fw-semibold mb-0 d-flex align-items-center">
                <img src="https://cdn.jsdelivr.net/npm/svg-country-flags@1.2.10/svg/cd.svg" width="22" class="me-2 rounded-1" alt="RDC" /> 
                Rép. Démocratique du Congo
              </h6>
              <div class="country-emblem-box" title="Armoiries de la RDC">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/20/Coat_of_arms_of_the_Democratic_Republic_of_the_Congo.svg/500px-Coat_of_arms_of_the_Democratic_Republic_of_the_Congo.svg.png" alt="Armoiries RDC">
              </div>
            </div>
            <ul class="list-group list-group-flush small mb-3">
              <li class="list-group-item d-flex justify-content-between align-items-center">Église de Kinshasa <span class="badge bg-primary">Siège national</span></li>
              <li class="list-group-item">Église de Goma</li>
            </ul>
          </div>

          <div class="mt-4">
            <div class="country-banner">
              <img src="https://images.unsplash.com/photo-1541432901042-2d8bd64b4a9b?auto=format&fit=crop&q=80&w=600" alt="Abidjan Côte d'Ivoire">
            </div>
            <div class="d-flex align-items-center justify-content-between mb-2">
              <h6 class="text-white fw-semibold mb-0 d-flex align-items-center">
                <img src="https://cdn.jsdelivr.net/npm/svg-country-flags@1.2.10/svg/ci.svg" width="22" class="me-2 rounded-1" alt="Côte d'Ivoire" /> 
                Côte d'Ivoire & Afrique de l'Ouest
              </h6>
              <div class="country-emblem-box" title="Armoiries de la Côte d'Ivoire">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/90/Coat_of_arms_of_the_Ivory_Coast.svg/500px-Coat_of_arms_of_the_Ivory_Coast.svg.png" alt="Armoiries CI">
              </div>
            </div>
            <ul class="list-group list-group-flush small">
              <li class="list-group-item">Extensions Abidjan, Cotonou (Bénin), Lomé (Togo)...</li>
            </ul>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-6 group" data-group="europe">
        <div class="card-continent p-4 h-100">
          <div class="d-flex align-items-center mb-3 pb-2" style="border-bottom: 1px solid rgba(255,255,255,0.1);">
            <h5 class="mb-0 text-white fw-bold d-flex align-items-center">
              <i class="fa-solid fa-earth-europe me-2 text-info"></i> Europe
            </h5>
          </div>
          
          <div class="mt-3">
            <div class="country-banner">
              <img src="https://images.unsplash.com/photo-1502602898657-3e91760cbb34?auto=format&fit=crop&q=80&w=600" alt="Paris France">
            </div>
            <div class="d-flex align-items-center justify-content-between mb-2">
              <h6 class="text-white fw-semibold mb-0 d-flex align-items-center">
                <img src="https://cdn.jsdelivr.net/npm/svg-country-flags@1.2.10/svg/fr.svg" width="22" class="me-2 rounded-1" alt="France" /> 
                France
              </h6>
              <div class="country-emblem-box" title="Emblème de la République Française">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b7/Coat_of_arms_of_the_French_Republic.svg/500px-Coat_of_arms_of_the_French_Republic.svg.png" alt="Emblème France">
              </div>
            </div>
            <ul class="list-group list-group-flush small mb-3">
              <li class="list-group-item d-flex justify-content-between align-items-center">Église de Paris <span class="badge bg-primary">Siège Europe</span></li>
              <li class="list-group-item">Cellules de Lyon & Marseille</li>
            </ul>
          </div>

          <div class="mt-4">
            <div class="country-banner">
              <img src="https://images.unsplash.com/photo-1561131248-152ab564ab93?auto=format&fit=crop&q=80&w=600" alt="Bruxelles Belgique">
            </div>
            <div class="d-flex align-items-center justify-content-between mb-2">
              <h6 class="text-white fw-semibold mb-0 d-flex align-items-center">
                <img src="https://cdn.jsdelivr.net/npm/svg-country-flags@1.2.10/svg/be.svg" width="22" class="me-2 rounded-1" alt="Belgique" /> 
                Belgique & Espace Schengen
              </h6>
              <div class="country-emblem-box" title="Armoiries du Royaume de Belgique">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f1/Great_coat_of_arms_of_Belgium.svg/500px-Great_coat_of_arms_of_Belgium.svg.png" alt="Armoiries Belgique">
              </div>
            </div>
            <ul class="list-group list-group-flush small">
              <li class="list-group-item">Représentations officielles à Bruxelles, Suisse & Royaume-Uni</li>
            </ul>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-6 group" data-group="amerique">
        <div class="card-continent p-4 h-100">
          <div class="d-flex align-items-center mb-3 pb-2" style="border-bottom: 1px solid rgba(255,255,255,0.1);">
            <h5 class="mb-0 text-white fw-bold d-flex align-items-center">
              <i class="fa-solid fa-earth-americas me-2 text-info"></i> Amérique
            </h5>
          </div>
          
          <div class="mt-3">
            <div class="country-banner">
              <img src="https://images.unsplash.com/photo-1507608869274-d3177c8bb4c7?auto=format&fit=crop&q=80&w=600" alt="Montréal Canada">
            </div>
            <div class="d-flex align-items-center justify-content-between mb-2">
              <h6 class="text-white fw-semibold mb-0 d-flex align-items-center">
                <img src="https://cdn.jsdelivr.net/npm/svg-country-flags@1.2.10/svg/ca.svg" width="22" class="me-2 rounded-1" alt="Canada" /> 
                Canada
              </h6>
              <div class="country-emblem-box" title="Armoiries du Canada">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f4/Arms_of_Canada.svg/500px-Arms_of_Canada.svg.png" alt="Armoiries Canada">
              </div>
            </div>
            <ul class="list-group list-group-flush small mb-3">
              <li class="list-group-item d-flex justify-content-between align-items-center">Église de Montréal <span class="badge bg-primary">Siège Amérique</span></li>
              <li class="list-group-item">Communauté de Toronto</li>
            </ul>
          </div>

          <div class="mt-4">
            <div class="country-banner">
              <img src="https://images.unsplash.com/photo-1501594907352-04cda38ebc29?auto=format&fit=crop&q=80&w=600" alt="USA">
            </div>
            <div class="d-flex align-items-center justify-content-between mb-2">
              <h6 class="text-white fw-semibold mb-0 d-flex align-items-center">
                <img src="https://cdn.jsdelivr.net/npm/svg-country-flags@1.2.10/svg/us.svg" width="22" class="me-2 rounded-1" alt="USA" /> 
                États-Unis & Amérique Latine
              </h6>
              <div class="country-emblem-box" title="Grand Sceau des États-Unis">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Great_Seal_of_the_United_States_%28obverse%29.svg/500px-Great_Seal_of_the_United_States_%28obverse%29.svg.png" alt="Sceau USA">
              </div>
            </div>
            <ul class="list-group list-group-flush small">
              <li class="list-group-item">Groupes de prière francophones et missions d'évangélisation</li>
            </ul>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-6 group" data-group="asie">
        <div class="card-continent p-4 h-100">
          <div class="d-flex align-items-center mb-3 pb-2" style="border-bottom: 1px solid rgba(255,255,255,0.1);">
            <h5 class="mb-0 text-white fw-bold d-flex align-items-center">
              <i class="fa-solid fa-earth-asia me-2 text-info"></i> Asie
            </h5>
          </div>
          
          <div class="mt-3">
            <div class="country-banner">
              <img src="https://images.unsplash.com/photo-1524492412937-b28074a5d7da?auto=format&fit=crop&q=80&w=600" alt="New Delhi Inde">
            </div>
            <div class="d-flex align-items-center justify-content-between mb-2">
              <h6 class="text-white fw-semibold mb-0 d-flex align-items-center">
                <img src="https://cdn.jsdelivr.net/npm/svg-country-flags@1.2.10/svg/in.svg" width="22" class="me-2 rounded-1" alt="Inde" /> 
                Inde & Moyen-Orient
              </h6>
              <div class="country-emblem-box" title="Emblème national de l'Inde">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/55/Emblem_of_India.svg/500px-Emblem_of_India.svg.png" alt="Emblème Inde">
              </div>
            </div>
            <ul class="list-group list-group-flush small">
              <li class="list-group-item">Église des étudiants de New Delhi</li>
              <li class="list-group-item">Représentations et cellules de maison connectées</li>
            </ul>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-6 group" data-group="oceanie">
        <div class="card-continent p-4 h-100">
          <div class="d-flex align-items-center mb-3 pb-2" style="border-bottom: 1px solid rgba(255,255,255,0.1);">
            <h5 class="mb-0 text-white fw-bold d-flex align-items-center">
              <i class="fa-solid fa-earth-oceania me-2 text-info"></i> Océanie
            </h5>
          </div>
          
          <div class="mt-3">
            <div class="country-banner">
              <img src="https://images.unsplash.com/photo-1506973035872-a4ec16b8e8d9?auto=format&fit=crop&q=80&w=600" alt="Sydney Australie">
            </div>
            <div class="d-flex align-items-center justify-content-between mb-2">
              <h6 class="text-white fw-semibold mb-0 d-flex align-items-center">
                <img src="https://cdn.jsdelivr.net/npm/svg-country-flags@1.2.10/svg/au.svg" width="22" class="me-2 rounded-1" alt="Australie" /> 
                Australie & Pacifique
              </h6>
              <div class="country-emblem-box" title="Armoiries de l'Australie">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/da/Coat_of_arms_of_Australia.svg/500px-Coat_of_arms_of_Australia.svg.png" alt="Armoiries Australie">
              </div>
            </div>
            <ul class="list-group list-group-flush small">
              <li class="list-group-item text-white-50 italic">Suivi pastoral à distance et vagues d'implantation en cours d'étude pour la diaspora.</li>
            </ul>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

@endsection