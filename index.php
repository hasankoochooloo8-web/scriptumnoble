<!DOCTYPE html>
<html lang="en-GB">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Timeless Hand-Lettered Artistry at Scriptum Noble</title>
  <link rel="icon" href="favicon.ico">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* Custom CSS for styles and glassmorphism based on design system */
    :root {
      --bs-primary: #d4af37;
      --bs-secondary: #222222;
      --bs-accent: #91ea14;
      --bs-background-base: #f9f8f6;
      --bs-surface-glass: rgba(255, 255, 255, 0.6);
      --bs-font-serif: 'PT Serif', serif;
      --bs-font-sans-serif: 'Roboto', sans-serif;
      --bs-border-radius: 4px;
    }

    body {
      font-family: var(--bs-font-sans-serif);
      background-color: var(--bs-background-base);
      color: var(--bs-secondary);
    }

    h1, h2, h3, h4, h5, h6 {
      font-family: var(--bs-font-serif);
      font-weight: 700;
    }

    .btn-primary {
      --bs-btn-bg: var(--bs-primary);
      --bs-btn-border-color: var(--bs-primary);
      --bs-btn-hover-bg: #8c7324; /* primaryDark */
      --bs-btn-hover-border-color: #8c7324;
      --bs-btn-active-bg: #8c7324;
      --bs-btn-active-border-color: #8c7324;
      --bs-btn-color: #ffffff;
    }

    .btn-dark {
      --bs-btn-bg: var(--bs-secondary);
      --bs-btn-border-color: var(--bs-secondary);
      --bs-btn-hover-bg: #000000;
      --bs-btn-hover-border-color: #000000;
      --bs-btn-active-bg: #000000;
      --bs-btn-active-border-color: #000000;
      --bs-btn-color: #ffffff;
    }

    .btn-outline-dark {
      --bs-btn-color: var(--bs-secondary);
      --bs-btn-border-color: var(--bs-secondary);
      --bs-btn-hover-color: #ffffff;
      --bs-btn-hover-bg: var(--bs-secondary);
      --bs-btn-hover-border-color: var(--bs-secondary);
      --bs-btn-active-color: #ffffff;
      --bs-btn-active-bg: var(--bs-secondary);
      --bs-btn-active-border-color: var(--bs-secondary);
    }
    
    .rounded-1 {
        border-radius: var(--bs-border-radius) !important;
    }

    .pattern-gradient-radial {
      background: radial-gradient(circle at top left, #f9f8f6, #e0e0d8); /* backgroundBase with a slight variation */
    }

    .backdrop-blur-sm {
      backdrop-filter: blur(5px);
       -webkit-backdrop-filter: blur(5px);
    }

    .backdrop-blur-md {
      backdrop-filter: blur(10px);
       -webkit-backdrop-filter: blur(10px);
    }

    .shadow-grow {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .shadow-grow:hover {
        transform: translateY(-5px);
        box-shadow: 0 1rem 3rem rgba(0,0,0,.175) !important;
    }

    .transition-all {
        transition: all 0.3s ease;
    }

    /* Icon styling - inline SVG */
    .icon {
      display: inline-block;
      width: 1em;
      height: 1em;
      vertical-align: -0.125em;
      fill: currentColor;
    }

    /* Override Bootstrap bg-opacity and text-bg-dark for contrast */
    .bg-light.bg-opacity-50 {
      background-color: rgba(248, 249, 250, 0.7) !important; /* Slightly more opaque for better contrast */
    }
    .text-bg-dark {
      background-color: var(--bs-secondary) !important;
      color: #ffffff !important;
    }
    .text-bg-dark .text-muted {
        color: rgba(255, 255, 255, 0.75) !important;
    }

    /* Custom styles for image hover effect in services */
    .service-card-image-wrapper {
        position: relative;
        overflow: hidden;
        border-radius: var(--bs-border-radius);
    }
    .service-card-image-wrapper img {
        transition: transform 0.5s ease-in-out;
    }
    .service-card-image-wrapper:hover img {
        transform: scale(1.05);
    }
    
    /* Ensure content contrast on cards with glassmorphism */
    .bg-white.bg-opacity-75 {
        background-color: rgba(255, 255, 255, 0.85) !important; /* Adjust for readability */
    }
    .bg-white.bg-opacity-50 {
        background-color: rgba(255, 255, 255, 0.70) !important; /* Adjust for readability */
    }
  </style>
</head>
<body>
  <header>
    <nav id="site-nav" class="navbar navbar-expand-lg d-flex align-items-center justify-content-between p-3 bg-white fixed-top shadow-sm">
      <div class="container">
        <a class="navbar-brand fw-bold fs-4 text-dark" href="#">Scriptum Noble</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <ul class="navbar-nav me-auto me-lg-0 mb-2 mb-lg-0 gap-3">
            <li class="nav-item">
              <a class="nav-link text-dark" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" href="#services">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" href="#workshops">Workshops</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" href="#testimonials">Testimonials</a>
            </li>
          </ul>
          <a href="#contact" class="btn btn-dark fw-bold rounded-1 d-flex align-items-center gap-2 shadow-sm ms-lg-3">Inquire Now
            <svg class="icon" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
            </svg>
          </a>
        </div>
      </div>
    </nav>
  </header>
<main>
    <section id="hero" class="min-vh-100 d-flex align-items-center pt-5 pattern-gradient-radial position-relative">
      <div class="glassmorphismOverlay position-absolute top-0 start-0 w-100 h-100 pointer-events-none bg-white bg-opacity-10 backdrop-blur-sm"></div>
      <div class="container d-flex flex-column flex-lg-row align-items-center gap-5 pt-lg-0 pt-5 mt-5 mt-lg-0 position-relative z-1">
        <div class="col-12 col-lg-6 order-1 order-lg-2">
          <div class="service-card-image-wrapper">
            <img src="images/hero-calligraphy-desk.jpeg" width="768" height="768" alt="Artist creating bespoke calligraphy at Scriptum Noble" class="img-fluid w-100 object-fit-cover shadow-sm rounded-1">
          </div>
        </div>
        <div class="col-12 col-lg-6 order-2 order-lg-1 text-center text-lg-start">
          <h1 class="display-4 fw-bold mb-3 text-secondary">Timeless Hand-Lettered Artistry at Scriptum Noble</h1>
          <p class="lead mb-4">Transforming your most meaningful words into exquisite bespoke calligraphy, custom engravings, and luxury event invitations.</p>
          <div class="d-flex flex-column flex-md-row justify-content-center justify-content-lg-start gap-3">
            <a href="#contact" class="btn btn-primary fw-bold rounded-1 px-4 py-2 shadow-sm d-inline-flex align-items-center gap-2">
              Commission a Piece
              <svg class="icon" viewBox="0 0 16 16">
                <path d="M13.56 12.39a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h5.05l-.5-.5H1.5A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h11A1.5 1.5 0 0 0 14 12.5v-5.05l-.5.5v5.05z"/>
                <path d="M15.5 2.13a1 1 0 0 0-1.554-.748L7.14 7.02l-.5.5-.5.5v.71l-.1-.1-.7-.7-.1-.1L7.87 14.5a1 1 0 0 0 1.414 0L15.5 8.354a1 1 0 0 0 0-1.415l-6-6zM8.5 13.5l-2-.5 1.5-1.5zM14.5 7.5L9 13l-.5-.5L14 7l.5.5z"/>
              </svg>
            </a>
            <a href="#workshops" class="btn btn-outline-dark fw-bold rounded-1 px-4 py-2 shadow-sm d-inline-flex align-items-center gap-2">
              View Workshops
              <svg class="icon" viewBox="0 0 16 16">
                <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1zm5.854-2.854a.5.5 0 0 1 0 .708L5.707 5H9.5a.5.5 0 0 1 0 1H5.707l1.147 1.146a.5.5 0 0 1-.708.708l-2-2a.5.5 0 0 1 0-.708l2-2a.5.5 0 0 1 .708 0z"/>
              </svg>
            </a>
          </div>
        </div>
      </div>
    </section>

    <section id="about" class="py-5">
      <div class="container d-flex flex-column gap-4 text-center">
        <h2 class="display-5 text-secondary">The Scriptum Noble Difference</h2>
        <p class="fs-5 lh-base mx-auto" style="max-width: 800px;">At Scriptum Noble, we believe that in our fast-paced digital world, the slow, intentional stroke of a pen holds unparalleled power. We utilize heritage techniques, ethically sourced archival inks, and premium cotton papers to craft pieces that endure for generations. From rigorous nib-preparation processes to our exclusive seal-wax blending, every detail matters. We are not just creating objects, but cherished heirlooms that tell your story.</p>
      </div>
    </section>

    <section id="services" class="py-5 bg-light bg-opacity-50">
      <div class="container">
        <h2 class="text-center mb-5 display-5 text-secondary">Our Artisanal Services</h2>
        <div class="row g-4">
          <div class="col-12 col-lg-8">
            <div class="card p-4 d-flex flex-column justify-content-end h-100 rounded-1 position-relative overflow-hidden shadow-grow transition-all bg-white bg-opacity-75 backdrop-blur-md">
              <div class="service-card-image-wrapper position-absolute top-0 start-0 w-100 h-100 z-0">
                <img src="images/service-wedding-invitations.jpeg" width="896" height="512" alt="Custom wedding invitations by Scriptum Noble" class="img-fluid w-100 h-100 object-fit-cover">
              </div>
              <div class="card-body text-white z-1 p-0 mt-auto">
                <h3 class="card-title h4 text-shadow-dark">Bespoke Invitations & Event Suites</h3>
                <p class="card-text text-shadow-dark">Comprehensive design of your wedding or gala invitations, featuring hand-pressed foils, deckled edges, and custom spot-calligraphy.</p>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-4 d-flex flex-column gap-4">
            <div class="card p-4 rounded-1 flex-grow-1 shadow-grow transition-all bg-white bg-opacity-75 backdrop-blur-md">
              <div class="service-card-image-wrapper position-absolute top-0 start-0 w-100 h-100 z-0 opacity-25">
                 <img src="images/service-glass-engraving.jpeg" width="448" height="256" alt="Engraving service on a perfume bottle" class="img-fluid w-100 h-100 object-fit-cover">
              </div>
              <div class="card-body z-1 p-0">
                <h3 class="card-title h5 text-secondary">Glass & Metal Engraving</h3>
                <p class="card-text text-dark">Permanent calligraphy on perfume bottles, wine glasses, and luxury gifting items, creating truly personal heirlooms.</p>
              </div>
               <svg class="icon position-absolute bottom-0 end-0 m-3 text-primary" style="width: 3rem; height: 3rem;" viewBox="0 0 16 16">
                  <path d="M11.474 0H4.526L0 4.526v6.948L4.526 16h6.948L16 11.474V4.526L11.474 0zM8 12.5a4.5 4.5 0 1 1 0-9 4.5 4.5 0 0 1 0 9z"/>
                  <path d="M8 5a3 3 0 1 0 0 6 3 3 0 0 0 0-6zm.5 1.5a.5.5 0 1 0-1 0 .5.5 0 0 0 1 0z"/>
               </svg>
            </div>
            <div class="card p-4 rounded-1 flex-grow-1 shadow-grow transition-all bg-white bg-opacity-75 backdrop-blur-md">
              <div class="service-card-image-wrapper position-absolute top-0 start-0 w-100 h-100 z-0 opacity-25">
                 <img src="images/service-live-lettering.jpeg" width="448" height="256" alt="Live calligraphy event activation" class="img-fluid w-100 h-100 object-fit-cover">
              </div>
              <div class="card-body z-1 p-0">
                <h3 class="card-title h5 text-secondary">On-Site Brand Activations</h3>
                <p class="card-text text-dark">Live hand-lettering for corporate events, engaging guests with personalized keepsakes and unforgettable experiences.</p>
              </div>
              <svg class="icon position-absolute bottom-0 end-0 m-3 text-primary" style="width: 3rem; height: 3rem;" viewBox="0 0 16 16">
                <path d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h13A1.5 1.5 0 0 0 16 14.5v-10A1.5 1.5 0 0 0 14.5 3H11V2.5A1.5 1.5 0 0 0 9.5 1h-3zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5zM1.5 4H14.5a.5.5 0 0 1 .5.5v10a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5z"/>
              </svg>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="workshops" class="py-5 position-relative">
      <div class="container d-flex flex-column align-items-center text-center gap-4">
        <h2 class="display-5 text-secondary">Learn with Scriptum Noble</h2>
        <p class="fs-5 lh-base mx-auto" style="max-width: 800px;">Discover the meditative art of modern calligraphy. Our intensive sessions cover everything from basic upstrokes and pressure control to advanced flourishing and ink-mixing theory. Perfect for beginners and intermediate artists alike, these workshops foster creativity and precision.</p>
        <ul class="list-unstyled d-flex flex-wrap justify-content-center gap-4 mb-4">
          <li class="p-3 bg-white bg-opacity-75 backdrop-blur-sm rounded-1 shadow-sm fs-5 text-secondary">Introduction to Pointed Pen</li>
          <li class="p-3 bg-white bg-opacity-75 backdrop-blur-sm rounded-1 shadow-sm fs-5 text-secondary">Copperplate Essentials</li>
          <li class="p-3 bg-white bg-opacity-75 backdrop-blur-sm rounded-1 shadow-sm fs-5 text-secondary">Flourishing & Composition</li>
          <li class="p-3 bg-white bg-opacity-75 backdrop-blur-sm rounded-1 shadow-sm fs-5 text-secondary">Envelope Addressing & Layout</li>
        </ul>
        <a href="#contact" class="btn btn-primary fw-bold rounded-1 px-4 py-2 mt-3 shadow-sm d-inline-flex align-items-center gap-2">
          Reserve Your Seat
          <svg class="icon" viewBox="0 0 16 16">
            <path d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
            <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
          </svg>
        </a>
      </div>
    </section>

    <section id="testimonials" class="py-5 bg-secondary bg-opacity-10">
      <div class="container">
        <h2 class="text-center mb-5 display-5 text-secondary">Words from Our Clients</h2>
        <div class="row g-4 justify-content-center">
          <div class="col-12 col-lg-4">
            <div class="card p-4 rounded-1 shadow-grow transition-all bg-white bg-opacity-50 backdrop-blur-md h-100">
              <h4 class="h5 text-primary mb-3">Exceptional Artistry!</h4>
              <p class="card-text text-dark">"Scriptum Noble created the most breathtaking invitation suite for our wedding. The attention to detail in the bespoke wax seals and vintage stamps was unmatched. Truly made our special day even more memorable."</p>
              <footer class="blockquote-footer mt-3 text-muted">Eleanor V., New York</footer>
            </div>
          </div>
          <div class="col-12 col-lg-4">
            <div class="card p-4 rounded-1 shadow-grow transition-all bg-white bg-opacity-50 backdrop-blur-md h-100">
              <h4 class="h5 text-primary mb-3">Engaging Brand Activation</h4>
              <p class="card-text text-dark">"We hired them for a live engraving activation at our product launch party. Guests were utterly mesmerized by the artistry and loved receiving personalized items. A truly elevated, interactive experience that garnered significant social media buzz."</p>
              <footer class="blockquote-footer mt-3 text-muted">Marcus T., Brand Manager, Luxury Goods Inc.</footer>
            </div>
          </div>
          <div class="col-12 col-lg-4">
            <div class="card p-4 rounded-1 shadow-grow transition-all bg-white bg-opacity-50 backdrop-blur-md h-100">
              <h4 class="h5 text-primary mb-3">Inspiring Workshop!</h4>
              <p class="card-text text-dark">"The beginner's calligraphy workshop was perfectly structured and incredibly inspiring. I left feeling confident with my oblique pen, loaded with high-quality supplies, and excited to continue my calligraphy journey. Highly recommend!"</p>
              <footer class="blockquote-footer mt-3 text-muted">Anya S., Aspiring Calligrapher</footer>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="contact" class="py-5 text-bg-dark pattern-gradient-radial">
      <div class="container d-flex flex-column gap-5">
        <div class="row g-4">
          <div class="col-lg-5 d-flex flex-column gap-3">
            <h2 class="h3 mb-3 text-white">Visit Scriptum Noble's Studio</h2>
            <p class="mb-1 text-white">507 Linden Boulevard, New York, NY 11203, USA</p>
            <p class="mb-1 text-white">Phone: <a href="tel:+13052020892" class="text-light text-decoration-none">+1 (305) 202-0892</a></p>
            <p class="mb-1 text-white">Email: <a href="mailto:info@scriptumnoble.com" class="text-light text-decoration-none">info@scriptumnoble.com</a></p>
            <p class="small text-white"><em>Studio visits are by appointment only to ensure dedicated attention to your project.</em></p>
            <div class="mt-4">
              <iframe 
                src="https://maps.google.com/maps?q=New%20York,USA&t=&z=10&ie=UTF8&iwloc=&output=embed" 
                width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy">
              </iframe>
            </div>
          </div>
          <div class="col-lg-6 offset-lg-1 rounded-1 p-4 bg-white bg-opacity-10 backdrop-blur-md shadow-lg">
            <h2 class="h3 mb-4 text-white">Request a Commission</h2>
            <form>
              <div class="mb-3">
                <label for="fullName" class="form-label text-light">Full Name</label>
                <input type="text" class="form-control" id="fullName" placeholder="Jane Doe">
              </div>
              <div class="mb-3">
                <label for="emailAddress" class="form-label text-light">Email Address</label>
                <input type="email" class="form-control" id="emailAddress" placeholder="jane@example.com">
              </div>
              <div class="mb-3">
                <label for="serviceOfInterest" class="form-label text-light">Service of Interest</label>
                <select class="form-select" id="serviceOfInterest">
                  <option selected disabled>Choose...</option>
                  <option>Bespoke Invitations</option>
                  <option>Engraving</option>
                  <option>Live Event Activation</option>
                  <option>Calligraphy Workshop</option>
                  <option>Other</option>
                </select>
              </div>
              <div class="mb-4">
                <label for="projectDetails" class="form-label text-light">Project Details</label>
                <textarea class="form-control" id="projectDetails" rows="4" placeholder="Share your vision and any specific requirements..."></textarea>
              </div>
              <button type="submit" class="btn btn-light fw-bold rounded-1 mt-3 w-100 d-flex align-items-center justify-content-center gap-2">
                Send Inquiry
                <svg class="icon" viewBox="0 0 16 16">
                  <path d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.5.5 0 0 1-.9.02L2.5 1.708 1.146.438a.5.5 0 0 1 .428-.679L15.354.146z"/>
                </svg>
              </button>
            </form>
          </div>
        </div>
      </div>
    </section>
  </main>
<footer class="footer text-bg-dark py-4">
    <div class="container d-flex flex-column flex-md-row justify-content-between align-items-center pt-4">
      <p class="mb-2 mb-md-0 text-white">&copy; 2024 Scriptum Noble. All rights reserved.</p>
      <div class="d-flex gap-3">
        <a href="./privacy.html" class="text-white text-decoration-none small">Privacy Policy</a>
        <a href="./tos.html" class="text-white text-decoration-none small">Terms of Service</a>
      </div>
    </div>
    <div id="cookieConsent" class="cookie-consent-banner w-100 py-3 text-center text-white bg-secondary fixed-bottom d-none">
      <div class="container d-flex flex-column flex-md-row justify-content-center align-items-center gap-3">
        <span>We use cookies to ensure you get the best experience on our website.</span>
        <button id="acceptCookies" class="btn btn-primary btn-sm rounded-1 px-3">Accept</button>
      </div>
    </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const cookieConsentBanner = document.getElementById('cookieConsent');
      const acceptCookiesButton = document.getElementById('acceptCookies');
      const cookieName = 'consent_Scriptum Noble_cookies_accepted';

      // Check if the user has already accepted cookies
      if (!localStorage.getItem(cookieName)) {
        cookieConsentBanner.classList.remove('d-none');
      }

      // Handle "Accept" button click
      acceptCookiesButton.addEventListener('click', function() {
        localStorage.setItem(cookieName, 'true');
        cookieConsentBanner.classList.add('d-none');
      });

      // Simple smooth scroll for anchor links
      document.querySelectorAll('a[href^="#"]').forEach(anchor => {
          anchor.addEventListener('click', function (e) {
              e.preventDefault();

              document.querySelector(this.getAttribute('href')).scrollIntoView({
                  behavior: 'smooth'
              });
          });
      });
    });
  </script>
</body>
</html>