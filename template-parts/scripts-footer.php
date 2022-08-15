<?php if ( !(isset($is_landing) && $is_landing==true) ) exit; ?>

<!-- Bootstrap core JavaScript -->
<script src="vendor/components/jquery/jquery.min.js"></script>
<script src="vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<!-- Libraries for visuals -->
<script src="vendor/graingert/wow/dist/wow.js"></script>
<script src="vendor/soerenkroell/composer-slick/slick/slick.min.js"></script>
<script src="vendor/pablog1/js-animated-counter/multi-animated-counter.js"></script>

<?php // Add form scripts only page with form ?>
<?php if ( isset($has_form_on_page) && $has_form_on_page==true ): ?>

	<!-- Libraries for forms -->
	<script src="vendor/igorescobar/jquery-mask-plugin/src/jquery.mask.js"></script>
	<script src="vendor/chathurabuddi/jquery-validation/dist/jquery.validate.min.js"></script>
	<script src="vendor/chathurabuddi/jquery-validation/dist/localization/messages_fr.min.js"></script>
	<script src="vendor/jackocnr/intl-tel-input/build/js/intlTelInput.js"></script>
	<script src="vendor/jackocnr/intl-tel-input/build/js/data.min.js"></script>
	<script src="vendor/jackocnr/intl-tel-input/build/js/utils.js"></script>
	<script src="js/detect.min.js"></script>

	<!-- MAIN JS FILES  -->
	<script src="js/form-handling.js"></script>

<?php endif; ?>


<script src="js/main.js"></script>
