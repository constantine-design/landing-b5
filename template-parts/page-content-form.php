<?php if ( !(isset($is_landing) && $is_landing==true) ) exit; ?>

<form id="form" action="process.php" method="post">

  <div>
      <input id="i-name" placeholder="NOM" class="form-control name" name="nom" type="text" required />
  </div>
  
  <div>
      <input id="i-surname" placeholder="PRENOM" class="form-control name" name="prenom" type="text" required />
  </div>

  <select  class="form-control" name="desired_time" required="required">
	<option value="" selected>HEURE DE RAPPEL SOUHAITÉE</option>
	<option value="À tout moment">À tout moment</option>
	<option value="Le matin">Le matin</option>
	<option value="L'après midi">L'après midi</option>
	<option value="Le soir">Le soir</option>
	<option value="Au plus vite">Au plus vite</option>
  </select>

  <div>
    <input id="phone" class="form-control phone" name="telephone" type="tel" value="">
    <div>
      <span id="valid-msg" class="hide">✓ Valide</span>
      <span id="error-msg" class="hide"></span>
      <span id="phone-msg-placeholder">&nbsp;</span>
    </div>
  </div>
  
  
  <div>
    <input id="i-mail" placeholder="E-MAIL" class="form-control" name="email" type="email" required />
    <span id="valid-mail">✓ Valide</span>
  </div>

  <input id="i-ip" name="ip" type="hidden" />
  <input id="i-device" name="device" type="hidden" />
  <input id="i-utm_base" name="utm_base" type="hidden" value="<?= isset($_GET['utm_base'])?$_GET['utm_base']:'' ?>" />

  <div class="text-center">
    <button type="submit" class="btn btn-primary mb-3" id="submit-form">ENVOYER</button>
</div>
  
  <div>
	  <div class="text-primary text-center small">Un agent vous rappelle gratuitement.</div>
	  <div class="text-center small">Vos données sont confidentielles et traitées avec respect.</div>
  </div>

</form>
