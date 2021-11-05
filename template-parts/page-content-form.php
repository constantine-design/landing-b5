<?php if ( !(isset($is_landing) && $is_landing==true) ) exit; ?>

<form id="form" action="process.php" method="post">

  <div>
      <input id="i-name" placeholder="NOM ET PRENOM" class="form-control name" name="nom" type="text" required />
  </div>

  <div>
    <select class="form-control" name="amount" required="required">
	  <option value="" selected="" >MONTANT A INVESTIR</option>
	  <option value="De 10 000 € à 25 000 €">De 10 000 € à 25 000 €</option>
      <option value="De 25 000 € à 50 000 €">De 25 000 € à 50 000 €</option>
      <option value="De 50 000 € à 100 000 €">De 50 000 € à 100 000 €</option>
      <option value="Plus de 100 000 €">Plus de 100 000 €</option>
	</select>
  </div>

  <div>
    <input id="i-mail" placeholder="E-MAIL" class="form-control" name="email" type="email" required />
    <span id="valid-mail">✓ Valide</span>
  </div>

  <div>
    <input id="phone" class="form-control phone" name="telephone" type="tel" value="">
    <div>
      <span id="valid-msg" class="hide">✓ Valide</span>
      <span id="error-msg" class="hide"></span>
      <span id="phone-msg-placeholder">&nbsp;</span>
    </div>
  </div>

  <div class="mb-4">
      <textarea class="form-control" name="message" placeholder="Vous avez un projet precis ? Une question particuliere ?"></textarea>
  </div>

  <input id="i-ip" name="ip" type="hidden" />
  <input id="i-device" name="device" type="hidden" />

  <div class="text-center">
     <button type="submit" class="btn btn-primary btn-lg mb-3" id="submit-form">ENVOYER</button>
  </div>

</form>
