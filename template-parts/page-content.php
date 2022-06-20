<?php
/* page content */
if ( !(isset($is_landing) && $is_landing==true) ) exit;
?>


<!-- Hero Block
=============================================== -->
<section class="hero-section py-5">
  <div class="hero-content container d-flex flex-column justify-content-center">
    <div class="row" style="z-index:10;">
      <div class="col-lg-6 text-white">
        <div class="text-center text-lg-left mb-5 mb-lg-5">
          <img class="img-fluid mb-5" style="max-width: 150px;" src="https://via.placeholder.com/150x60/03a9f4/FFFFFF/?text=LOGO" alt="Logo">
          <h1 class="mb-4 text-uppercase">Ceci est mon titre principal</h1>
          <p class="lead mb-4">posés valise pourparlers rêver chiots rendez-vous naissance Eiffel myrtille.</p>
        </div>
      </div>
      <div class="col-lg-6 col-xl-5 offset-xl-1">
        <div class="bg-white rounded-lg px-4 px-lg-5 py-5 mx-auto shadow" style="max-width:500px;" id="lead-collector">
          <h3 class="text-center mt-3 mb-1 h4 text-uppercase font-weight-bold">Lorem Ispum</h3>
          <p class="text-center">Dollor set amet</p>
          <?php include __DIR__ . '/page-content-form.php'; ?>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- Text Section
=============================================== -->
<section class="section">
  <!-- Section content -->
  <div class="container">
    <div class="row justify-content-center align-items-center">

      <div class="col-12 col-md-6 py-2 text-center">
        <img class="img-fluid d-inline-block rounded" src="https://via.placeholder.com/800x600">
      </div>

      <div class="col-12 col-md-6 py-2">
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
    <h2 class="section-heading text-center mx-auto" style="max-width:600px;">Témoignages</h2>
    <?php include __DIR__ . '/page-content-testimonials.php'; ?>
  </div>
</section>



<!-- Highlight Text section
=============================================== -->
<section class="section bg-primary text-white py-5">
  <!-- Section content -->
  <div class="container">
    <h2 class="section-heading text-center mx-auto" style="max-width:600px;">Lorem superposés</h2>
    <div class="row justify-content-center text-center">
       <!-- counter -->
      <div class="col-12 col-md-4 py-2 px-5">
        <span class='h3'>1000</span>
        <div class="count-desc">Lorem superposés valise pourparlers rêver chiots rendez-vous naissance Eiffel myrtille. </div>
      </div>
       <!-- counter -->
      <div class="col-12 col-md-4 py-2 px-5">
        <span class='h3'>1000</span>
        <div class="count-desc">Grèves Arc de Triomphe encore pourquoi sentiments baguette pédiluve une projet sentiments saperlipopette vachement le.</div>
      </div>
       <!-- counter -->
      <div class="col-12 col-md-4 py-2 px-5">
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
    <h2 class="section-heading text-center mx-auto" style="max-width:600px;">Nos partenaires</h2>
    <div class="logo-slider my-3 slider">
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
