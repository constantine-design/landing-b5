<?php $is_landing = true; $has_form_on_page = true; ?>
<!DOCTYPE html>

<html lang="fr">

<head>

  <!-- Head Scripts
  =============================================== -->

  <?php require_once __DIR__ . '/config/config.php'; ?>
  <?php include __DIR__ . '/template-parts/scripts-head.php'; ?>

</head>

<body>

  <!-- =========================================== -->
  <!--                 Page Content                -->
  <!-- =========================================== -->

  <?php include __DIR__ . '/template-parts/page-content.php'; ?>

  <!-- =========================================== -->
  <!--              #  Page Content                -->
  <!-- =========================================== -->


  <!-- Footer
  =============================================== -->

  <?php include __DIR__ . '/template-parts/footer.php'; ?>


  <!-- Footer Scripts
  =============================================== -->

  <?php include __DIR__ . '/template-parts/scripts-footer.php'; ?>

</body>

</html>
