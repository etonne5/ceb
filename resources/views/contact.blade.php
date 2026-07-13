@extends('layouts.main')

@section('content')
<!-- CONTACT -->
  <section id="contact" class="section bg-light py-5">
  <div class="container py-lg-2">
    <!-- En-tête de section -->
    <div class="text-center mb-5">
      <span class="eyebrow text-primary fw-semibold"> </span>
      <h2 class="section-title display-6 fw-bold mt-2">Contactez-nous</h2>
      <p class="section-sub lead text-muted mt-3">
        Nous répondons à vos questions et requêtes de prière.
      </p>
    </div>

    <div class="contact-wrap">
      <div class="row g-4 align-items-stretch">
        <!-- Formulaire (7 colonnes sur desktop) -->
        <div class="col-lg-7">
          <div class="bg-white p-4 p-md-5 rounded-3 shadow-sm">
            <form method="POST" action="{{ route('contact.store')}}" id="contactForm" class="needs-validation" novalidate>
                 {{ csrf_field() }}

              <div class="row g-4">
                <!-- Nom et Email (2 colonnes sur mobile+) -->
                <div class="col-md-6">
                  <label for="name" class="form-label fw-semibold">Nom complet <span class="text-danger">*</span></label>
                  <input
                    type="text"
                    class="form-control form-control-lg"
                    id="name"
                    name="name"
                    placeholder="Votre nom et prénom"
                    required
                    aria-describedby="nameHelp"
                    value="{{ old('name') }}"
                  />
                   @if ($errors->has('name'))
                                            <span class="text-danger">{{ $errors->first('name') }}</span>
                                        @endif
                  <div class="invalid-feedback">Veuillez indiquer votre nom complet.</div>
                </div>
                <div class="col-md-6">
                  <label for="email" class="form-label fw-semibold">Email <span class="text-danger">*</span></label>
                  <input
                    type="email"
                    class="form-control form-control-lg"
                    id="email"
                    name="email"
                    placeholder="exemple@domaine.com"
                    value="{{ old('email') }}"
                    required
                    aria-describedby="emailHelp"
                  />
                  @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                  <div class="invalid-feedback">Veuillez fournir une adresse email valide.</div>
                </div>

                <!-- Sujet -->
                <div class="col-12">
                  <label for="subject" class="form-label fw-semibold">Sujet</label>
                  <input
                    type="text"
                    class="form-control form-control-lg"
                    id="subject"
                    name="subject"
                    placeholder="Objet de votre message"
                    value="{{ old('subject') }}"
                  />
                  @if ($errors->has('subject'))
                                            <span class="text-danger">{{ $errors->first('subject') }}</span>
                                        @endif
                </div>

                <!-- Message -->
                <div class="col-12">
                  <label for="message" class="form-label fw-semibold">Message / Requête de prière <span class="text-danger">*</span></label>
                  <textarea
                    class="form-control form-control-lg"
                    id="message"
                    name="message"
                    rows="6"
                    placeholder="Écrivez votre message ici..."
                    required
                    aria-describedby="messageHelp"
                  >{{ old('message') }}</textarea>
                  @if ($errors->has('message'))
                                            <span class="text-danger">{{ $errors->first('message') }}</span>
                                        @endif
                                        @if ($errors->has('g-recaptcha-response'))
                                            <span class="text-danger">{{ $errors->first('g-recaptcha-response') }}</span>
                                        @endif
                  <div class="invalid-feedback">Merci de saisir un message.</div>
                </div>

                <!-- Bouton d'envoi -->
                <div class="col-12">
                  <button type="submit" class="btn btn-primary btn-lg px-4 py-2">
                    <i class="fa-regular fa-paper-plane me-2"></i>
                    Envoyer le message
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>

        <!-- Informations de contact (5 colonnes sur desktop) -->
        <div class="col-lg-5">
          <div class="card-soft h-100 p-4 p-md-5 rounded-3 bg-white shadow-sm">
            <h5 class="card-title fw-bold mb-4">Coordonnées</h5>

            <div class="d-flex flex-column gap-3">
              <div class="d-flex align-items-center">
                <i class="fa-solid fa-location-dot me-3 text-primary fs-5"></i>
                <p class="mb-0">
                  n°49-53 rue Loufoulakari,<br />
                  avenue Sergent Malamine Moungali, Brazzaville
                </p>
              </div>

              <div class="d-flex align-items-center">
                <i class="fa-regular fa-envelope me-3 text-primary fs-5"></i>
                <a href="mailto:ceb.bethanie@hotmail.com" class="text-decoration-none text-dark">
                  ceb.bethanie@hotmail.com
                </a>
              </div>

              <div class="d-flex align-items-center">
                <i class="fa-solid fa-globe me-3 text-primary fs-5"></i>
                <a href="https://www.dzabatouecko.com" target="_blank" class="text-decoration-none text-dark">
                  www.dzabatouecko.com
                </a>
              </div>

              <div class="d-flex align-items-center">
                <i class="fa-solid fa-phone me-3 text-primary fs-5"></i>
                <div>
                  <a href="tel:+242055361942" class="text-decoration-none text-dark">+(242) 05 53 61 942</a><br />
                  <a href="tel:+242055560279" class="text-decoration-none text-dark">+(242) 05 55 60 279</a>
                </div>
              </div>
            </div>

            <hr class="my-4" />

            <h6 class="fw-bold mb-3">Nos rendez-vous</h6>
            <ul class="list-unstyled small mb-4">
              <li class="d-flex mb-2">
                <strong class="me-2">Mardi :</strong>
                <span>17h00 – 19h00 · Culte des mamans</span>
              </li>
              <li class="d-flex mb-2">
                <strong class="me-2">Mercredi :</strong>
                <span>15h00 – 17h00 · Enseignement</span>
              </li>
              <li class="d-flex mb-2">
                <strong class="me-2">Vendredi :</strong>
                <span>17h30 – 19h30 · Réveil</span>
              </li>
              <li class="d-flex">
                <strong class="me-2">Dimanche :</strong>
                <span>07h00 – 10h00 · Culte</span>
              </li>
            </ul>

            <div class="d-flex gap-3">
              <a
                class="btn btn-outline-primary btn-sm px-3"
                target="_blank"
                href="https://facebook.com"
                aria-label="Facebook"
              >
                <i class="fa-brands fa-facebook-f me-1"></i> Facebook
              </a>
              <a
                class="btn btn-outline-primary btn-sm px-3"
                target="_blank"
                href="https://youtube.com"
                aria-label="YouTube"
              >
                <i class="fa-brands fa-youtube me-1"></i> YouTube
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CSS personnalisé (optionnel) -->
<style>
  /* Style pour les icônes alignées */
  .card-soft .fa-location-dot,
  .card-soft .fa-envelope,
  .card-soft .fa-globe,
  .card-soft .fa-phone {
    width: 24px;
    text-align: center;
  }

  /* Style pour le formulaire */
  .form-control:focus {
    border-color: #0d6efd;
    box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.15);
  }

  /* Style pour les boutons sociaux */
  .btn-outline-primary {
    border-radius: 6px;
  }

  /* Style pour la section */
  .section {
    padding-top: 6rem;
    padding-bottom: 6rem;
  }

  @media (max-width: 768px) {
    .section {
      padding-top: 4rem;
      padding-bottom: 4rem;
    }
  }


  /* Rendre le badge reCAPTCHA visible et bien positionné */
  .grecaptcha-badge {
    visibility: visible !important;
    opacity: 1 !important;
    bottom: 20px !important;
    right: 20px !important;
    transform: scale(1) !important;
    z-index: 9999 !important;
  }
  /* Optionnel : Ajouter une ombre pour le contraste */
  .grecaptcha-badge iframe {
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2) !important;
  }
</style>

<!-- JavaScript pour la validation du formulaire (Bootstrap 5) -->
<script>
  (function () {
    'use strict';
    const forms = document.querySelectorAll('.needs-validation');
    Array.from(forms).forEach(form => {
      form.addEventListener('submit', event => {
        if (!form.checkValidity()) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  })();





  $('#contactForm').submit(function(event) {
        event.preventDefault();
    
        grecaptcha.ready(function() {
            grecaptcha.execute("{{ env('GOOGLE_RECAPTCHA_KEY') }}", {action: 'subscribe_newsletter'}).then(function(token) {
                $('#contactForm').prepend('<input type="hidden" name="g-recaptcha-response" value="' + token + '">');
                $('#contactForm').unbind('submit').submit();
            });;
        });
    });
</script>
 @endsection
