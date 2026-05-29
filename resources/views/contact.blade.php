@extends('layouts.main')

@section('content')
<!-- CONTACT -->
  <section id="contact" class="section bg-light">
    <div class="container">
      <div class="text-center mb-4">
        <span class="eyebrow">Nous écrire</span>
        <h2 class="section-title">Contactez‑nous</h2>
        <p class="section-sub">Nous répondons à vos questions et requêtes de prière.</p>
      </div>

      <div class="contact-wrap">
        <div class="row g-4">
          <div class="col-lg-7">
            <form id="contactForm" novalidate>
              <div class="row g-3">
                <div class="col-md-6">
                  <label class="form-label">Nom complet</label>
                  <input type="text" class="form-control" id="name" required />
                  <div class="invalid-feedback">Votre nom est requis.</div>
                </div>
                <div class="col-md-6">
                  <label class="form-label">Email</label>
                  <input type="email" class="form-control" id="email" required />
                  <div class="invalid-feedback">Adresse email invalide.</div>
                </div>
                <div class="col-12">
                  <label class="form-label">Sujet</label>
                  <input type="text" class="form-control" id="subject" />
                </div>
                <div class="col-12">
                  <label class="form-label">Message / requête de prière</label>
                  <textarea class="form-control" id="message" rows="5" required></textarea>
                  <div class="invalid-feedback">Merci de saisir un message.</div>
                </div>
                <div class="col-12">
                  <button type="submit" class="btn btn-brand px-4"><i class="fa-regular fa-paper-plane me-2"></i> Envoyer</button>
                </div>
              </div>
            </form>
          </div>
          <div class="col-lg-5">
            <div class="card-soft h-100 p-4">
              <h5 class="mb-3">Coordonnées</h5>
              <p class="mb-2"><i class="fa-solid fa-location-dot me-2"></i> n°49‑53 rue Loufoulakari, avenue Sergent Malamine Moungali, Brazzaville</p>
              <p class="mb-2"><i class="fa-regular fa-envelope me-2"></i> ceb.bethanie@hotmail.com</p>
              <p class="mb-2"><i class="fa-solid fa-globe me-2"></i> www.dzabatouecko.com</p>
              <p class="mb-3"><i class="fa-solid fa-phone me-2"></i> +(242) 05 53 61 942 / 05 55 60 279</p>
              <h6 class="mt-3">Nos rendez‑vous</h6>
              <ul class="small text-secondary mb-0">
                <li><strong>Mardi :</strong> 17h00 – 19h00 · Culte des mamans</li>
                <li><strong>Mercredi :</strong> 15h00 – 17h00 · Enseignement</li>
                <li><strong>Vendredi :</strong> 17h30 – 19h30 · Réveil</li>
                <li><strong>Dimanche :</strong> 07h00 – 10h00 · Culte</li>
              </ul>
              <div class="mt-3 d-flex gap-2">
                <a class="btn btn-outline-dark btn-sm" target="_blank" href="#"><i class="fa-brands fa-facebook-f me-1"></i> Facebook</a>
                <a class="btn btn-outline-dark btn-sm" target="_blank" href="#"><i class="fa-brands fa-youtube me-1"></i> YouTube</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
 @endsection
