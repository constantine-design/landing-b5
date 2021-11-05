<?php $is_landing = true; ?>
<!DOCTYPE html>

<html lang="fr">

<head>

  <!-- Head Scripts
  =============================================== -->

  <?php require_once __DIR__ . '/config/config.php'; ?>
  <?php include __DIR__ . '/template-parts/scripts-head.php'; ?>

</head>

<body class="d-flex flex-column" style="min-height: 100vh">

  <!-- =========================================== -->
  <!--                 Page Content                -->
  <!-- =========================================== -->

  <div id="content-wrapper" class="flex-grow-1 d-flex flex-column justify-content-center">
    <?php include __DIR__ . '/template-parts/merci-content.php'; ?>
  </div>

  <!-- =========================================== -->
  <!--              #  Page Content                -->
  <!-- =========================================== -->


  <!-- Footer
  =============================================== -->

  <div id="footer-wrapper" class="flex-grow-0">
    <?php include __DIR__ . '/template-parts/footer.php'; ?>
  </div>


  <!-- Footer Scripts
  =============================================== -->

  <?php include __DIR__ . '/template-parts/scripts-footer.php'; ?>

</body>

</html>
