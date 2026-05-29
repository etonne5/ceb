@extends('layouts.main')

@section('content')

 <!-- HERO -->
  <!-- Ajout de style="margin-top: 56px;" pour pousser le contenu sous la navbar fixe -->
 <header id="accueil" class="hero text-center d-flex flex-column align-items-center justify-content-center" style="margin-top: 70px; padding: 40px 0;">
  <div class="content">
    <span class="eyebrow"></span>

    <div class="logo-container mt-3 mb-4 d-flex justify-content-center">
      <img src="images/logo.png"
           alt="Logo Centre Évangélique Béthesda"
           class="hero-logo"
           style="height: 150px; width: 150px; border-radius:20%; object-fit: cover; border: 2px solid #ccc;">
    </div>

    <h1 class="mt-1">CENTRE EVANGELIQUE BETHESDA</h1>

    <p class="mt-3 mb-4" style="color: rgb(255, 255, 255); font-weight: bold;">"JESUS-CHRIST HIER AUJOURD'HUI ET ETERNELLEMENT"</p>

<div class="verse-container mb-4 text-white-50" style="max-width: 600px; margin: 0 auto; min-height: 60px;">
  <span class="d-block fst-italic text-white" id="daily-verse" style="font-size: 1.1rem; font-weight: 500;">
    Chargement du verset du jour...
  </span>
  <span class="d-block mt-1 text-uppercase tracking-wider fw-bold text-warning" id="daily-reference" style="font-size: 0.8rem; letter-spacing: 1px;">
    </span>
</div>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    // 1. Liste de références clés (une pour chaque jour) pour simuler un verset du jour toujours en français
    const references = [
      "Jeremie+29:11", "Psaumes+27:1", "Philippiens+4:13", "Proverbes+3:5",
      "Josue+1:9", "Jean+3:16", "Romains+15:13", "Philippiens+4:6",
      "Psaumes+23:1", "Romains+8:31", "Isaie+41:10", "Psaumes+46:2"
    ];

    // 2. Sélection d'une référence unique par jour calendaire
    const today = new Date();
    const dayOfYear = today.getDate() + today.getMonth();
    const selectedRef = references[dayOfYear % references.length];

    // 3. Appel de l'API avec la traduction Louis Segond (translation=lsg)
    const apiUrl = `https://bible-api.com/${selectedRef}?translation=lsg`;

    fetch(apiUrl)
      .then(response => {
        if (!response.ok) {
          throw new Error("Erreur de chargement");
        }
        return response.json();
      })
      .then(data => {
        // Nettoyage du texte (l'API renvoie parfois des retours à la ligne superflus)
        const verseText = data.text.replace(/\n/g, ' ').trim();
        const verseRef = data.reference;

        // Injection dans votre page HTML
        document.getElementById("daily-verse").innerText = `« ${verseText} »`;
        document.getElementById("daily-reference").innerText = verseRef;
      })
      .catch(error => {
        console.error("Erreur API Bible:", error);
        // Secours permanent en français
        document.getElementById("daily-verse").innerText = "« Car je connais les projets que j'ai formés sur vous, dit l'Éternel, projets de paix et non de malheur, afin de vous donner un avenir et de l'espérance. »";
        document.getElementById("daily-reference").innerText = "Jérémie 29:11";
      });
  });
</script>

    <div class="cta d-flex flex-wrap gap-3 justify-content-center">
      <a class="btn btn-brand" href="#predications"><i class="fa-solid fa-play me-2"></i> Regarder une prédication</a>
      <a class="btn btn-outline-light" href="#evenements"><i class="fa-regular fa-calendar me-2"></i> Prochains événements</a>
    </div>
  </div>
</header>

<div class="floating-contact-container">
  <!-- Bulle de texte d'invitation à la prière -->
  <div class="prayer-request-bubble">
    Pour tout besoin de prière, veuillez nous contacter ou laisser un message
  </div>

  <!-- Bouton d'appel -->
  <a href="tel:+242XXXXXXXXX"
     class="contact-float phone-float"
     title="Nous appeler par téléphone">
    <i class="fa-solid fa-phone contact-icon"></i>
  </a>

  <!-- Bouton WhatsApp -->
  <a href="https://wa.me/242XXXXXXXXX?text=Bonjour%20Centre%20%C3%89vang%C3%A9lique%20B%C3%A9thesda%2C%20j%27ai%20un%20besoin%20de%20pri%C3%A8re."
     class="contact-float whatsapp-float"
     target="_blank"
     rel="noopener noreferrer"
     title="Nous contacter sur WhatsApp">
    <i class="fa-brands fa-whatsapp contact-icon"></i>
  </a>
</div>

<!-- NOUVEAU STYLE CSS À AJOUTER OU METTRE À JOUR -->
<style>
  .floating-contact-container {
    position: fixed;
    bottom: 40px;
    right: 40px;
    z-index: 9999;
    display: flex;
    gap: 15px;
    align-items: center; /* Aligne la bulle et les boutons verticalement */
  }

  /* Style de la bulle de texte */
  .prayer-request-bubble {
    background-color: rgba(33, 37, 41, 0.9); /* Fond sombre semi-transparent pour rester lisible */
    color: #fff;
    padding: 10px 16px;
    border-radius: 20px;
    font-size: 13px;
    font-weight: 500;
    max-width: 220px; /* Limite la largeur pour éviter que ça prenne tout l'écran */
    box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.2);
    border: 1px solid rgba(255, 255, 255, 0.1);
    animation: fadeInRight 0.5s ease-out; /* Animation d'apparition discrète */
    line-height: 1.4;
  }

  .contact-float {
    width: 60px;
    height: 60px;
    color: #fff;
    border-radius: 50%;
    text-align: center;
    font-size: 28px;
    box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.3);
    display: flex;
    align-items: center;
    justify-content: center;
    text-decoration: none;
    transition: transform 0.3s ease, background-color 0.3s ease;
  }

  .whatsapp-float { background-color: #25d366; }
  .whatsapp-float:hover { background-color: #128c7e; transform: scale(1.1); color: #fff; }

  .phone-float { background-color: #0d6efd; }
  .phone-float:hover { background-color: #0b5ed7; transform: scale(1.1); color: #fff; }

  .contact-icon { margin: 0; }

  /* Petite animation d'entrée pour la bulle */
  @keyframes fadeInRight {
    from {
      opacity: 0;
      transform: translateX(20px);
    }
    to {
      opacity: 1;
      transform: translateX(0);
    }
  }

  /* Adaptation Responsive Mobile */
  @media (max-width: 767px) {
    .floating-contact-container {
      bottom: 20px;
      right: 20px;
      gap: 10px;
      flex-direction: column; /* Aligne les éléments du haut vers le bas sur mobile */
      align-items: flex-end; /* Aligne la bulle à droite au-dessus des boutons */
    }

    .prayer-request-bubble {
      max-width: 180px;
      font-size: 11px;
      padding: 8px 12px;
      text-align: right; /* Texte orienté vers les boutons sur mobile */
      border-radius: 15px;
    }

    .contact-float {
      width: 50px;
      height: 50px;
      font-size: 24px;
    }
  }
</style>









@endsection
