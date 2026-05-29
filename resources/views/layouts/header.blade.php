<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>CEB - Centre d'Evangélisation Béthanie</title>
  <!-- Ligne à ajouter pour le logo dans l'onglet -->
  <link rel="icon" type="image/png" href="images/logo.png">

  <!-- Optionnel : Version pour les appareils Apple / Raccourcis iPhone -->
  <link rel="apple-touch-icon" href="images/logo.png">

  <!-- Fonts & Icons -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkfF6qPZ6bU4WBi7EkPHTyB8Q5M7O2/5C5j6b5j1RZQd0C2Cj3YzYx4oQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    :root {
      --brand: #22c55e;        /* violet spirituel */
      --brand-2: #22c55e;       /* vert espoir */
      --text: #1f2937;          /* slate-800 */
      --muted: #6b7280;         /* slate-500 */
      --light: #f8fafc;         /* slate-50 */
      --card: #ffffff;
      --shadow: 0 10px 30px rgba(2,6,23,.08);
      --radius: 18px;
    }

    html, body { font-family: 'Poppins', system-ui, -apple-system, Segoe UI, Roboto, 'Helvetica Neue', Arial, 'Noto Sans', 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji'; color: var(--text); }

    /* Navbar */
    .navbar {
      --bs-navbar-color: #0f172a;
      --bs-navbar-hover-color: var(--brand);
      transition: all .3s ease;
      backdrop-filter: saturate(140%) blur(8px);
    }
    .navbar.scrolled { box-shadow: var(--shadow); background: rgba(255,255,255,.92) !important; }
    .navbar-brand img { height: 44px; }
    .nav-link { font-weight: 500; }
    .nav-link.active, .nav-link:hover { color: var(--brand) !important; }

    /* Hero */
.hero {
  position: relative;
  min-height: 92vh;
  display: grid;
  place-items: center;
  /* Utilise la variable modifiée par JS, ou banner-01.jpg par défaut */
  background: center/cover no-repeat var(--hero-img, url('uploads/banner-01.jpg'));
  color: #fff;
  /* Ajout d'une transition douce lors du changement d'image */
  transition: background 1s ease-in-out;
}
    .hero::before {
      content: "";
      position: absolute; inset: 0;
      background: linear-gradient(180deg, rgba(5,6,22,.65) 0%, rgba(5,6,22,.55) 40%, rgba(5,6,22,.75) 100%);
    }
    .hero .content { position: relative; text-align: center; max-width: 920px; padding: 0 1rem; }
    .hero h1 { font-weight: 700; font-size: clamp(2rem, 4vw, 3.25rem); letter-spacing: .3px; }
    .hero p { color: #e5e7eb; font-size: clamp(.95rem, 1.5vw, 1.125rem); }
    .hero .cta .btn { padding: .85rem 1.2rem; border-radius: 12px; font-weight: 600; }

    /* Sections */
    section.section { padding: 80px 0; }
    .section-title { margin-bottom: 12px; font-weight: 700; }
    .section-sub { color: var(--muted); margin-bottom: 36px; }

    /* Cards */
    .card-soft { background: var(--card); border: 0; border-radius: var(--radius); box-shadow: var(--shadow); overflow: hidden; }
    .eyebrow { text-transform: uppercase; letter-spacing: .08em; font-weight: 600; font-size: .8rem; color: var(--brand); }

    /* About */
    .about-img { border-radius: var(--radius); box-shadow: var(--shadow); object-fit: cover; width: 100%; height: 100%; }

    /* Sermons */
    .filter-bar .btn { border-radius: 999px; font-weight: 600; }
    .sermon-card .thumb { position: relative; aspect-ratio: 16/9; overflow: hidden; }
    .sermon-card .thumb img { width: 100%; height: 100%; object-fit: cover; transition: transform .5s ease; }
    .sermon-card:hover .thumb img { transform: scale(1.05); }
    .sermon-card .play { position: absolute; inset: 0; display: grid; place-items: center; opacity: 0; transition: .3s; background: linear-gradient(180deg, rgba(2,6,23,.0), rgba(2,6,23,.4)); }
    .sermon-card:hover .play { opacity: 1; }
    .sermon-card .meta { color: var(--muted); font-size: .9rem; }

    /* Events */
    .event-card .date-badge { position: absolute; left: 16px; top: 16px; background: var(--brand); color: #fff; border-radius: 12px; padding: 8px 10px; text-align: center; line-height: 1; box-shadow: var(--shadow); }
    .event-card .date-badge .d { display:block; font-size: 1.1rem; font-weight: 700; }
    .event-card .date-badge .m { font-size: .75rem; opacity: .9; }

    /* Departments */
    .dept-card { border-radius: var(--radius); background: var(--card); box-shadow: var(--shadow); height: 100%; transition: transform .2s ease; }
    .dept-card:hover { transform: translateY(-4px); }
    .dept-card img { border-top-left-radius: var(--radius); border-top-right-radius: var(--radius); }

    /* Churches */
    .church-chip { border-radius: 999px; }

    /* Contact */
    .contact-wrap { background: linear-gradient(180deg,#fff, #f7f7fb); border-radius: var(--radius); box-shadow: var(--shadow); padding: 28px; }
    .form-control, .form-select { border-radius: 12px; padding: .8rem 1rem; }
    .btn-brand { background: var(--brand); color: #fff; border: none; }
    .btn-brand:hover { background: #                ; color: #fff; }

    /* Footer */
    .footer { background: #0f172a; color: #cbd5e1; }
    .footer a { color: #e5e7eb; text-decoration: none; }
    .footer a:hover { color: #fff; }

    /* Utilities */
    .divider { width: 80px; height: 4px; background: linear-gradient(90deg, var(--brand), var(--brand-2)); border-radius: 99px; margin: 14px auto 0; }


     /* Version 5 - Style Gradient Animé */
        .btn-live-gradient {
            background: linear-gradient(90deg, #FF0000, #FF5E5E, #FF0000);
            background-size: 200% 100%;
            color: white;
            border: none;
            border-radius: 50px;
            padding: 0.5rem 1.2rem;
            font-weight: 600;
            transition: all 0.3s ease;
            animation: gradientMove 3s infinite;
        }
        .btn-live-gradient:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(255, 0, 0, 0.4);
        }
  </style>
  <script>
    document.addEventListener("DOMContentLoaded", function () {
  const banners = [
    "uploads/banner-01.jpg",
    "uploads/banner-02.jpg",
    "uploads/banner-03.jpg",
    "uploads/banner-04.jpg"
  ];
  
  const heroElement = document.querySelector('.hero');
  if (heroElement) {
    // Sélectionne un index au hasard dans le tableau
    const randomIdx = Math.floor(Math.random() * banners.length);
    heroElement.style.setProperty('--hero-img', `url('${banners[randomIdx]}')`);
  }
});
  </script>
</head>
<body>
 <!-- NAVBAR -->
 <nav class="navbar navbar-expand-lg bg-white fixed-top">
    <div class="container">
      <a class="navbar-brand d-flex align-items-center gap-2" href="#accueil">
        <!-- Ajout d'une hauteur max pour éviter que le logo de la navbar soit géant -->
        <img src="images/logo.png" alt="CEB" style="max-height: 40px;" />
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav" aria-controls="nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
  <div class="collapse navbar-collapse" id="nav">
  <ul class="navbar-nav ms-auto align-items-center d-flex flex-column flex-lg-row gap-3 gap-lg-4">

    <li class="nav-item">
      <!-- Route active si on est sur la page d'accueil (/) -->
      <a class="nav-link {{ Request::is('/') ? 'active' : '' }} py-2" href="{{ route('home') }}">Accueil</a>
    </li>

    <li class="nav-item">
      <!-- Route active si l'URL contient 'propos' -->
      <a class="nav-link {{ Request::is('propos') ? 'active' : '' }} py-2" href="{{ route('propos') }}">À propos</a>
    </li>

    <li class="nav-item">
      <!-- Route active si l'URL contient 'predications' -->
      <a class="nav-link {{ Request::is('predications') ? 'active' : '' }} py-2" href="{{ route('predications') }}">Prédications</a>
    </li>

    <li class="nav-item">
      <!-- Route active si l'URL contient 'evenements' -->
      <a class="nav-link {{ Request::is('evenements') ? 'active' : '' }} py-2" href="{{ route('evenements') }}">Événements</a>
    </li>

    <li class="nav-item">
      <!-- Route active si l'URL contient 'departements' -->
      <a class="nav-link {{ Request::is('departements') ? 'active' : '' }} py-2" href="{{ route('departements') }}">Départements</a>
    </li>

    <li class="nav-item">
      <!-- Route active si l'URL contient 'eglises' -->
      <a class="nav-link {{ Request::is('eglises') ? 'active' : '' }} py-2" href="{{ route('eglises') }}">Nos Églises</a>
    </li>

    <li class="nav-item">
      <!-- Bouton de contact relié à sa route dédiée -->
      <a class="btn btn-sm btn-brand rounded-pill px-3" href="{{ route('contact') }}">Contact</a>
    </li>

    <li class="nav-item">
      <!-- Bouton externe inchangé pour le flux YouTube Live -->
      <a class="btn btn-sm btn-live-gradient rounded-pill px-3" target="_blank" href="https://youtube.com/votrechaine/live">
        <i class="fa-brands fa-youtube me-1"></i> Regarder le Live
      </a>
    </li>

  </ul>
</div>
    </div>
  </nav>


