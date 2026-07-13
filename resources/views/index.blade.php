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

    <h1 class="mt-1">CENTRE EVANGELIQUE BETHESDA </h1>

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










   document.addEventListener("DOMContentLoaded", function() {
    grecaptcha.ready(function() {
      grecaptcha.execute('{{ env("GOOGLE_RECAPTCHA_KEY") }}', { action: 'homepage' })
        .then(function(token) {
          fetch('{{ route("verify.recaptcha") }}', {
            method: 'POST',
            headers: {
              'Content-Type': 'application/json',
              'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
              'Accept': 'application/json'
            },
            body: JSON.stringify({ token: token })
          })
          .then(response => response.json())
          .then(data => {
            if (!data.success) {
              console.warn("reCAPTCHA échoué :", data.message);
            }
          })
          .catch(error => console.error("Erreur :", error));
        });
    });
  });
</script>

    
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

























  /* Conteneur principal */
.floating-contact-container {
  position: fixed;
  bottom: 30px;
  right: 30px;
  display: flex;
  flex-direction: column;
  align-items: flex-end;
  gap: 12px;
  z-index: 1000;
}

/* ===== BULLE D'INVITATION ===== */
.prayer-request-bubble {
  background: rgba(255, 255, 255, 0.95);
  backdrop-filter: blur(10px);
  -webkit-backdrop-filter: blur(10px);
  border-radius: 16px;
  padding: 14px 20px;
  max-width: 300px;
  box-shadow: 0 8px 32px rgba(0, 0, 0, 0.12);
  border: 1px solid rgba(255, 255, 255, 0.3);
  animation: slideInRight 0.5s ease, float 4s ease-in-out 0.8s infinite;
  font-size: 14px;
  color: #2d3748;
  font-weight: 500;
  line-height: 1.5;
  position: relative;
  text-align: center;
  margin-bottom: 5px;
}

.prayer-request-bubble::after {
  content: '';
  position: absolute;
  bottom: -10px;
  right: 30px;
  border-width: 10px 10px 0;
  border-style: solid;
  border-color: rgba(255, 255, 255, 0.95) transparent transparent;
}

/* ===== STYLE COMMUN POUR TOUS LES BOUTONS ===== */
.contact-float {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 55px;
  height: 55px;
  border-radius: 50%;
  text-decoration: none;
  color: white;
  font-size: 24px;
  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.15);
  transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
  position: relative;
}

.contact-float:hover {
  transform: scale(1.1);
  box-shadow: 0 6px 25px rgba(0, 0, 0, 0.25);
}

.contact-float:active {
  transform: scale(0.9);
}

.contact-icon {
  color: white;
  font-size: 24px;
}

/* Tooltip au survol */
.contact-float::after {
  content: attr(title);
  position: absolute;
  right: 65px;
  background: rgba(0, 0, 0, 0.85);
  color: white;
  padding: 6px 14px;
  border-radius: 8px;
  font-size: 12px;
  font-weight: 500;
  white-space: nowrap;
  opacity: 0;
  pointer-events: none;
  transition: all 0.3s ease;
  letter-spacing: 0.3px;
}

.contact-float::before {
  content: '';
  position: absolute;
  right: 55px;
  border-width: 6px 0 6px 8px;
  border-style: solid;
  border-color: transparent transparent transparent rgba(0, 0, 0, 0.85);
  opacity: 0;
  transition: all 0.3s ease;
}

.contact-float:hover::after,
.contact-float:hover::before {
  opacity: 1;
}

.contact-float:hover::after {
  right: 75px;
}

.contact-float:hover::before {
  right: 65px;
}

/* ===== COULEURS SPÉCIFIQUES ===== */
.phone-float {
  background: linear-gradient(135deg, #4CAF50, #2E7D32);
}

.whatsapp-float {
  background: linear-gradient(135deg, #25D366, #128C7E);
}

.email-float {
  background: linear-gradient(135deg, #EA4335, #B31412);
}

.messenger-float {
  background: linear-gradient(135deg, #4267B2, #1A3A7A);
}

.location-float {
  background: linear-gradient(135deg, #FF6B6B, #C0392B);
}

.form-float {
  background: linear-gradient(135deg, #667EEA, #764BA2);
}

/* ===== ANIMATIONS ===== */
@keyframes slideInRight {
  from {
    opacity: 0;
    transform: translateX(50px) scale(0.9);
  }
  to {
    opacity: 1;
    transform: translateX(0) scale(1);
  }
}

@keyframes float {
  0%, 100% { transform: translateY(0); }
  50% { transform: translateY(-6px); }
}

/* Animation d'apparition pour chaque bouton */
.contact-float {
  animation: fadeInUp 0.5s ease forwards;
  opacity: 0;
}

.contact-float:nth-child(2) { animation-delay: 0.1s; }
.contact-float:nth-child(3) { animation-delay: 0.2s; }
.contact-float:nth-child(4) { animation-delay: 0.3s; }
.contact-float:nth-child(5) { animation-delay: 0.4s; }
.contact-float:nth-child(6) { animation-delay: 0.5s; }
.contact-float:nth-child(7) { animation-delay: 0.6s; }

@keyframes fadeInUp {
  from {
    opacity: 0;
    transform: translateY(20px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

/* ===== RESPONSIVE ===== */
@media (max-width: 768px) {
  .floating-contact-container {
    bottom: 20px;
    right: 20px;
    gap: 10px;
  }

  .prayer-request-bubble {
    max-width: 220px;
    font-size: 12px;
    padding: 10px 16px;
  }

  .contact-float {
    width: 48px;
    height: 48px;
    font-size: 20px;
  }

  .contact-icon {
    font-size: 20px;
  }

  /* Cacher les tooltips sur mobile */
  .contact-float::after,
  .contact-float::before {
    display: none;
  }
}

@media (max-width: 480px) {
  .floating-contact-container {
    bottom: 15px;
    right: 15px;
    gap: 8px;
  }

  .prayer-request-bubble {
    max-width: 180px;
    font-size: 11px;
    padding: 8px 12px;
  }

  .contact-float {
    width: 42px;
    height: 42px;
    font-size: 18px;
  }

  .contact-icon {
    font-size: 18px;
  }
}
</style>









@endsection
