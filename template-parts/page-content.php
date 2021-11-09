<?php
/* page content */
if ( !(isset($is_landing) && $is_landing==true) ) exit;
?>


<!-- Hero Block
=============================================== -->
<section class="hero-section overflow-hidden pt-5 mb-5">
  <div class="hero-content container d-flex flex-column justify-content-center">
    <div class="row" style="z-index:10;">
      <div class="col-lg-6 text-white">
        <div class="text-left px-3">
          <img class="img-fluid mb-5 mr-5" style="max-width: 150px;" src="https://via.placeholder.com/150x60/03a9f4/FFFFFF/?text=LOGO" alt="Les Meilleurs Livrets">
          <h1 class="mb-4 text-uppercase">Ceci est mon titre principal</h1>
          <p class="lead mb-4">posés valise pourparlers rêver chiots rendez-vous naissance Eiffel myrtille.</p>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="bg-white rounded-lg px-4 px-lg-5 py-5 shadow mt-4 mx-2 mx-lg-5 mb-4" id="lead-collector">
          <h3 class="text-center mt-3 mb-1 h4 text-uppercase font-weight-bold">Lorem Ispum</h3>
          <p class="text-center" style="font-size: 1rem; font-weight: 600;">Dollor set amet</p>
          <?php include __DIR__ . '/page-content-form.php'; ?>
        </div>
      </div>
    </div>
  </div>
  <div class="svg-border-bottom text-white">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none" fill="currentColor">
      <polygon points="0,100 100,0 100,100"></polygon>
    </svg>
  </div>
</section>


<!-- Text Section
=============================================== -->
<section class="section py-3">
  <!-- Section content -->
  <div class="container">
    <div class="row justify-content-center align-items-center">

      <div class="col-12 col-md-6 mb-4 px-lg-5 text-center">
        <img class="img-fluid d-inline-block rounded" src="https://via.placeholder.com/800x600" alt="Super Livret">
      </div>

      <div class="col-12 col-md-6 mb-4 px-lg-5">
        <h2 class="mb-4 h3 text-uppercase">Les avantages du Lorem Ispum</h3>
        <div class="count-desc">
          Lorem superposés valise pourparlers rêver chiots rendez-vous naissance Eiffel myrtille.
          Grèves Arc de Triomphe encore pourquoi sentiments baguette pédiluve une projet sentiments saperlipopette vachement le.
          Brume éphémère baguette Bordeaux en fait sommet avoir minitel.
        </div>
      </div>

    </div>
  </div>
  <!-- # Section content -->
</section>


<!-- Testimonial Section
=============================================== -->
<section id="testimonials" class="section">
  <div class="container">
    <div class="row justify-content-center text-center mb-3">
      <div class="col-md-9">
        <h2 class="section-heading">Témoignages</h2>
      </div>
    </div>
    <?php include __DIR__ . '/page-content-testimonials.php'; ?>
  </div>
</section>



<!-- Highlight Text section
=============================================== -->
<section class="section bg-primary text-white py-4">
  <!-- Section content -->
  <div class="container">
    <div class="row justify-content-center text-center mb-3">
      <div class="col-md-9">
        <h2 class="section-heading mt-3">Lorem superposés</h2>
      </div>
    </div>
    <div class="row justify-content-center text-center">
       <!-- counter -->
      <div class="col-12 col-md-4 mb-4 px-5">
        <span class='h3'>1000</span>
        <div class="count-desc">Lorem superposés valise pourparlers rêver chiots rendez-vous naissance Eiffel myrtille. </div>
      </div>
       <!-- counter -->
      <div class="col-12 col-md-4 mb-4 px-5">
        <span class='h3'>1000</span>
        <div class="count-desc">Grèves Arc de Triomphe encore pourquoi sentiments baguette pédiluve une projet sentiments saperlipopette vachement le.</div>
      </div>
       <!-- counter -->
      <div class="col-12 col-md-4 mb-4 px-5">
        <span class='h3'>1000</span>
        <div class="count-desc">Brume éphémère baguette Bordeaux en fait sommet avoir minitel.</div>
      </div>
    </div>
  </div>
  <!-- # Section content -->
</section>



<!-- Partners Section
=============================================== -->
<section class="section">
  <div class="container">
    <div class="row justify-content-center text-center mb-3">
      <div class="col-md-9">
        <h2 class="section-heading">Nos partenaires</h2>
      </div>
    </div>
    <div class="logo-slider slider">
      <div>
        <img class="img-fluid mx-auto"  src="https:///via.placeholder.com/150x150.png">
      </div>
      <div>
        <img class="img-fluid mx-auto"  src="https:///via.placeholder.com/150x150.png">
      </div>
      <div>
        <img class="img-fluid mx-auto"  src="https:///via.placeholder.com/150x150.png">
      </div>
      <div>
        <img class="img-fluid mx-auto"  src="https:///via.placeholder.com/150x150.png">
      </div>
      <div>
        <img class="img-fluid mx-auto"  src="https:///via.placeholder.com/150x150.png">
      </div>
      <div>
        <img class="img-fluid mx-auto"  src="https:///via.placeholder.com/150x150.png">
      </div>
    </div>
  </div>
</section>
