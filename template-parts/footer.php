<?php if ( !(isset($is_landing) && $is_landing==true) ) exit; ?>

<footer class="footer bg-secondary text-white py-3" role="contentinfo">
  <div class="container">

    <div class="row justify-content-center align-items-center">
      <div class="col-md-4 text-center text-md-start">
        <div class="copyright text-uppercase m-1">
          © <?= SITE_NAME.' '.date("Y") ?>
        </div>
      </div>
      <div class="col-md-8 text-center text-md-end">
        <button type="button" class="btn btn-btn-link px-2 py-0 m-1 text-white" style="text-decoration:underline;" data-bs-toggle="modal" data-bs-target="#mLegales">
          Mentions Légales
        </button>
        <span class="d-none d-sm-inline">|</span>
    		<button type="button" class="btn btn-btn-link px-2 py-0 m-1 text-white" style="text-decoration:underline;" data-bs-toggle="modal" data-bs-target="#pconfidentialite">
          Politique de confidentialité
        </button>
      </div>
    </div>
  </div>
</footer>


<!-- MODALS -->

<!-- Terms and Conditions Modal -->
<div class="modal fade" id="mLegales" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header px-lg-4">
        <h2 class="h4 m-0 mt-2"><strong>Mentions Légales</strong></h2>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body p-lg-4">
        <?php include __DIR__ . '/footer-terms-text.php'; ?>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fermer</button>
      </div>

    </div>
  </div>
</div>

<!-- Privacy Policy Modal -->
<div class="modal fade" id="pconfidentialite" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header px-lg-4">
        <h2 class="h4 m-0 mt-2"><strong>Politique de confidentialité</strong></h2>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body p-lg-4">
        <?php include __DIR__ . '/footer-privacy-text.php'; ?>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fermer</button>
      </div>

    </div>
  </div>
</div>
