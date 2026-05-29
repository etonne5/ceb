<footer class="footer pt-5 pb-4">
    <div class="container">
      <div class="row g-4 pb-4">
        
        <div class="col-md-6 col-lg-4">
         <img src="{{ asset('images/logo.png') }}" 
     alt="CEB" 
     class="mb-3" 
     style="height: 48px; width: 48px; border-radius: 20%; object-fit: cover; border: 2px solid #ccc;" />
          <p class="mb-2">CENTRE EVANGELIQUE BETHESDA — BRAZZAVILLE, RÉPUBLIQUE DU CONGO.</p>
          
          <p class="small mb-3 text-white-50">
            <i class="fa-solid fa-phone me-2"></i> +242 06 660 00 00<br>
            <i class="fa-solid fa-envelope me-2"></i> contact@ceb-bethesda.org
          </p>
          
          <div class="d-flex gap-2">
            <a class="btn btn-sm btn-live-gradient rounded-pill px-3" target="_blank" href="https://youtube.com/votrechaine/live"><i class="fa-brands fa-youtube me-1"></i> Live</a>
            <a  class="btn btn-sm btn-brand rounded-pill px-3" href="#contact"><i class="fa-regular fa-envelope me-1"></i> Contact</a>
          </div>
        </div>

      <div class="col-md-6 col-lg-4">
  <h6 class="text-white mb-3">Suivez-nous</h6>
  <ul class="list-unstyled small d-flex flex-column gap-2">
    
    <li>
      <a href="https://youtube.com/votrechaine" target="_blank" rel="noopener noreferrer" class="text-decoration-none text-white-50 text-hover-white d-flex align-items-center gap-2">
        <i class="fa-brands fa-youtube text-danger fs-6"></i> YouTube (Directs & Cultes)
      </a>
    </li>
    
    <li>
      <a href="https://facebook.com/votrepage" target="_blank" rel="noopener noreferrer" class="text-decoration-none text-white-50 text-hover-white d-flex align-items-center gap-2">
        <i class="fa-brands fa-facebook text-primary fs-6"></i> Facebook
      </a>
    </li>
    
    <li>
      <a href="https://instagram.com/votrecompte" target="_blank" rel="noopener noreferrer" class="text-decoration-none text-white-50 text-hover-white d-flex align-items-center gap-2">
        <i class="fa-brands fa-instagram fs-6" style="color: #e1306c;"></i> Instagram
      </a>
    </li>
    
    <li>
      <a href="https://tiktok.com/@votrecompte" target="_blank" rel="noopener noreferrer" class="text-decoration-none text-white-50 text-hover-white d-flex align-items-center gap-2">
        <i class="fa-brands fa-tiktok text-light fs-6"></i> TikTok
      </a>
    </li>
    
    <li>
      <a href="https://wa.me/242XXXXXXXXX" target="_blank" rel="noopener noreferrer" class="text-decoration-none text-white-50 text-hover-white d-flex align-items-center gap-2">
        <i class="fa-brands fa-whatsapp text-success fs-6"></i> Communauté WhatsApp
      </a>
    </li>

  </ul>
</div>

        <div class="col-md-6 col-lg-4">
          <h6 class="text-white mb-2">Nos Cultes</h6>
          <p class="small text-white-50 mb-4">
            <i class="fa-regular fa-clock me-1"></i> Jeudi : 17h30 — Intercession<br>
            <i class="fa-regular fa-clock me-1"></i> Dimanche : 08h30 — Culte de Célébration
          </p>

          <h6 class="text-white mb-2">Mentions & Réseaux</h6>
          <p class="small mb-2">&copy; 2026 CEB. Tous droits réservés.</p>
          <p class="small mb-0">
            <a href="#" class="text-decoration-none text-white-50">Mentions légales</a> · 
            <a href="#" class="text-decoration-none text-white-50">Politique de confidentialité</a>
          </p>
        </div>

      </div>
    </div>
  </footer>

  <style>
    .text-white-50 { color: rgba(255, 255, 255, 0.6) !important; }
    .text-hover-white:hover { color: #ffffff !important; }
  </style>

  <div class="modal fade" id="ytModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Lecture</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body p-0">
          <div class="ratio ratio-16x9">
            <iframe id="ytFrame" src="" title="YouTube video" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    // Navbar shadow on scroll
    const nav = document.querySelector('.navbar');
    document.addEventListener('scroll', () => {
      nav.classList.toggle('scrolled', window.scrollY > 10);
    });

    // Sermon filtering
    const filterButtons = document.querySelectorAll('[data-filter]');
    const sermons = document.querySelectorAll('#sermons .sermon');
    filterButtons.forEach(btn => {
      btn.addEventListener('click', () => {
        filterButtons.forEach(b => b.classList.remove('active'));
        btn.classList.add('active');
        const f = btn.getAttribute('data-filter');
        sermons.forEach(card => {
          card.style.display = (f === 'all' || card.dataset.category === f) ? '' : 'none';
        });
      });
    });

    // YouTube modal
    const ytModal = new bootstrap.Modal('#ytModal');
    const ytFrame = document.getElementById('ytFrame');
    document.querySelectorAll('[data-yt]').forEach(link => {
      link.addEventListener('click', (e) => {
        e.preventDefault();
        const id = link.dataset.yt;
        ytFrame.src = `https://www.youtube.com/embed/${id}?autoplay=1&rel=0`;
        ytModal.show();
      });
    });
    document.getElementById('ytModal').addEventListener('hidden.bs.modal', ()=>{ ytFrame.src = ''; });

    // Churches filter
    const chips = document.querySelectorAll('[data-continent]');
    const groups = document.querySelectorAll('#churches .group');
    chips.forEach(c => {
      c.addEventListener('click', () => {
        chips.forEach(x => x.classList.remove('active'));
        c.classList.add('active');
        const target = c.dataset.continent;
        groups.forEach(g => {
          g.style.display = (target === 'all' || g.dataset.group === target) ? '' : 'none';
        });
      });
    });

    // Contact validation (Bootstrap)
    (function(){
      const form = document.getElementById('contactForm');
      if(form) {
        form.addEventListener('submit', function(e){
          if(!form.checkValidity()){
            e.preventDefault();
            e.stopPropagation();
          } else {
            e.preventDefault();
            alert('Merci ! Votre message a été envoyé.');
            form.reset();
          }
          form.classList.add('was-validated');
        });
      }
    })();
  </script>
</body>
</html>