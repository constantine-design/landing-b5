<?php if ( !(isset($is_landing) && $is_landing==true) ) exit; ?>

<footer class="footer bg-secondary text-white py-3" role="contentinfo">
  <div class="container">

    <div class="row justify-content-center align-items-center">
      <div class="col-md-4 text-center text-md-left">
        <div class="copyright text-uppercase m-1">
          © <?= SITE_NAME.' '.date("Y") ?>
        </div>
      </div>
      <div class="col-md-8 text-center text-md-right">
        <button type="button" class="btn btn-btn-link px-2 py-0 m-1 text-white" style="text-decoration:underline;" data-toggle="modal" data-target="#mLegales">
          Mentions Légales
        </button>
        <span class="d-none d-sm-inline">|</span>
    		<button type="button" class="btn btn-btn-link px-2 py-0 m-1 text-white" style="text-decoration:underline;" data-toggle="modal" data-target="#pconfidentialite">
          Politique de confidentialité
        </button>
      </div>
    </div>
  </div>
</footer>


<!-- MODALS -->

<!-- Terms and Conditions Modal -->
<div class="modal fade" id="mLegales">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header px-lg-4">
        <h2 class="pt-3"><strong>Mentions Légales</strong></h2>
        <button type="button" class="close mt-1" data-dismiss="modal">✕</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body p-lg-4">
        <?php include __DIR__ . '/footer-terms-text.php'; ?>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
      </div>

    </div>
  </div>
</div>

<!-- Privacy Policy Modal -->
<div class="modal fade" id="pconfidentialite">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header px-lg-4">
        <h2 class="pt-3"><strong>Politique de confidentialité</strong></h2>
        <button type="button" class="close mt-1" data-dismiss="modal">✕</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body p-lg-4">
        <?php include __DIR__ . '/footer-privacy-text.php'; ?>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
      </div>

    </div>
  </div>
</div>
