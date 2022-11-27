<?php
/* page content */
if ( !(isset($is_landing) && $is_landing==true) ) exit;
?>

<!-- Navigation  -->
<?php include __DIR__ . '/navigation.php'; ?>

<!-- Navigation Wrapper -->
<div data-bs-spy="scroll" data-bs-target="#page-main-nav" data-bs-smooth-scroll="true">


<!-- Hero Block
=============================================== -->
<section class="hero-section py-5">
  <div class="hero-content container d-flex flex-column justify-content-center">
    <div class="row" style="z-index:10;">
      <div class="col-lg-6 text-white">
        <div class="text-center text-lg-start mb-5 mb-lg-5">
          <h1 class="mb-4 text-uppercase">Ceci est mon titre principal</h1>
          <p class="lead mb-4">posés valise pourparlers rêver chiots rendez-vous naissance Eiffel myrtille.</p>
        </div>
      </div>
      <div class="col-lg-6 col-xl-5 offset-xl-1">
        <div class="bg-white rounded-4 px-4 px-lg-5 py-5 mx-auto shadow" style="max-width:500px;" id="lead-collector">
          <h3 class="text-center mt-3 mb-1 h4 text-uppercase fw-bold">Lorem Ispum</h3>
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

      <div class="col-12 col-md-6 py-2">
        <h2 class="mb-4 h3 text-uppercase">Les avantages du Lorem Ispum</h3>
        <div>
          Lorem superposés valise pourparlers rêver chiots rendez-vous naissance Eiffel myrtille.
          Grèves Arc de Triomphe encore pourquoi sentiments baguette pédiluve une projet sentiments saperlipopette vachement le.
          Brume éphémère baguette Bordeaux en fait sommet avoir minitel.
        </div>
      </div>

      <div class="col-12 col-md-6 py-2 text-center">
        <img class="img-fluid d-inline-block" src="https://via.placeholder.com/800x600">
      </div>

    </div>
  </div>
  <!-- # Section content -->
</section>


<!-- Section Half Image
=============================================== -->
<section class="my-5">
  <!-- Section content -->
  <div class="row g-0">

    <div class="col-12 col-md-6" style="background: url(https://via.placeholder.com/800x600) center/cover; min-height: 25rem;">
    </div>

    <div class="col-12 col-md-6 py-2 align-self-center"> 
      <div class="container container-half-md ms-md-0 my-4">
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


<!-- Section Half Color
=============================================== -->
<section class="my-5">
  <!-- Section content -->
  <div class="row g-0" style="min-height: 15rem">

    <div class="col-12 col-md-6 py-2 d-flex flex-column justify-content-center"> 
      <div class="container container-half-md me-md-0 my-2">
        <div>
          Lorem superposés valise pourparlers rêver chiots rendez-vous naissance Eiffel myrtille.
          Grèves Arc de Triomphe encore pourquoi sentiments baguette pédiluve une projet sentiments saperlipopette vachement le.
          Brume éphémère baguette Bordeaux en fait sommet avoir minitel.
        </div>
      </div>
    </div>

    <div class="col-12 col-md-6 py-2 bg-primary text-white d-flex flex-column justify-content-center"> 
      <div class="container container-half-md ms-md-0 my-2">
        <div>
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
    <h2 class="section-heading text-center mx-auto mb-4" style="max-width:600px;">Témoignages</h2>
    <?php include __DIR__ . '/page-content-testimonials.php'; ?>
  </div>
</section>



<!-- Counter Highlight Text section
=============================================== -->
<section class="section bg-primary text-white py-5">
  <!-- Section content -->
  <div class="container">
    <h2 class="section-heading text-center mx-auto" style="max-width:600px;">Lorem superposés</h2>
    <div id="counters_1" class="row justify-content-center text-center">
       <!-- counter -->
      <div class="col-12 col-md-4 py-2 px-5">
        <div class="counter h3" data-TargetNum="6" data-Speed="3500" data-Easing="linear"></div>
        <div class="count-desc">Lorem superposés valise pourparlers rêver chiots rendez-vous naissance Eiffel myrtille. </div>
      </div>
       <!-- counter -->
      <div class="col-12 col-md-4 py-2 px-5">
        <div class="counter h3" data-TargetNum="25" data-Speed="3500" data-Easing="linear"></div>
        <div class="count-desc">Grèves Arc de Triomphe encore pourquoi sentiments baguette pédiluve une projet sentiments saperlipopette vachement le.</div>
      </div>
       <!-- counter -->
      <div class="col-12 col-md-4 py-2 px-5">
        <div class="counter h3" data-TargetNum="100" data-Speed="3500" data-Easing="linear"></div>
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


<!-- #Navigation Wrapper  -->
</div>