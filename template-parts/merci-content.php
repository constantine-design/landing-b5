<?php if ( !(isset($is_landing) && $is_landing==true) ) exit; ?>

  <!-- Transaction Pixel -->
  <iframe src="https://trk.webmediarm.amaretads.me/tracking/iframe/lead/60d478e406ef3a076a26ac4e" width="1" height="1" style="display:none"></iframe>

  <div class="container d-flex flex-column justify-content-center">

   <div class="row justify-content-center">
    <div class="text-center p-3 p-xl-5 col-12 col-xl-8 animated growIn go bg-cgreen d-flex flex-column justify-content-center px-4 px-xl-5 py-5" data-aos="zoom-in">
    <h2 class="mb-4">Merci nous avons bien reçu votre demande, un conseiller prendra contact avec vous sous 48h.</h2>
    <p class="lead">Votre demande a été bien reçue.</p>
    <!-- <p class="subheader mb-4"></p> -->
    <span class="lead" id="timer"></span></div>
   </div>

  </div>

  <script type="text/javascript">
  var count = 5;
  var redirect = "index.php";
  function countDown(){
    var timer = document.getElementById("timer");
    if(count > 0){
      count--;
      timer.innerHTML = "Cette page sera redirigée dans <span class='h5'>"+count+"</span> secondes.";
      setTimeout("countDown()", 1000);
  }else{
      window.location.href = redirect;
    }
  }
  countDown();
  </script>
