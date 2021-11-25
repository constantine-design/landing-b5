jQuery(document).ready(function($) {


  /* ======================================================= */
  /*                      FORM HANDLING                      */
  /* ======================================================= */

  /* enable masks for forms fields
  ----------------------------------------------------------*/

  $('.name').mask('Z',{translation: {'Z': {pattern: /^[a-zàâçéèêëîïôûùüÿñæœ .-]*$/i, recursive: true}}});
  $('.phone').mask('SN',{translation: {'N': {pattern: /[0-9\.\-\s\t]/, recursive: true}, 'S': {pattern: /[0-9\+]/, recursive: false} }});

  /* activate validation for form input
  -----------------------------------------------------------*/

  /* custom email rules */
  var $params = {debug:false, rules:{}, messages:{}};
  $.validator.methods.email = function( value, element ) {
    return this.optional( element ) || /[a-zA-Z0-9-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-]+/.test( value );
  }

  /*  activate rules */
  $params['rules'][$("#i-name").attr("name")] = {"required": true, minlength: 3, maxlength: 30,};
  // $params['rules'][$("#i-surname").attr("name")] = {"required": true, minlength: 3, maxlength: 30,};
  $params['rules'][$("#i-mail").attr("name")] = {"required": true, email: true,};
  //$params['rules'][$("#i-phone").attr("name")] = {"required": true, phoneint: true,};
  $("#form").validate($params);

  /* phone field with number
  ---------------------------------------------------*/

  var input = document.querySelector("#phone"),
    errorMsg = document.querySelector("#error-msg"),
    validMsg = document.querySelector("#valid-msg");

  // here, the index maps to the error code returned from getValidationError - see readme
  var errorMap = ["Numéro non valide", "Code pays non valide", "Numéro trop court", "Numéro trop long", "Numéro non valide"];
  var errorReq = "Ce champ est obligatoire"; // message for required phone field
  errorMap[-99] = "Numéro de téléphone incorrect"; // undefinied (default) error message

  // initialise plugin
  var iti = window.intlTelInput(input, {
    initialCountry: "auto",
    preferredCountries: ["FR", "BE", "CH", "MС", "CA"],
    geoIpLookup: function(success, failure) {
      /*------------------------------------------------- */
      /*   here we get geoloc and also add it to input    */
      /*------------------------------------------------- */
      $.get("https://ipinfo.io", function() {}, "jsonp").always(function(resp) {
        var countryCode = (resp && resp.country) ? resp.country : "";
        $('input#i-ip').val( resp.city+" "+resp.country+" ("+resp.ip+") "+" Location: "+resp.loc ); // fill location input
        success(countryCode);
      });
    },
  });

  var reset = function() {
    input.classList.remove("error");
    errorMsg.innerHTML = "";
    errorMsg.classList.add("hide");
    validMsg.classList.add("hide");
  };

  // adds error message if phone field is empty
  var addErrorIfEmpty  = function() {
    if ( !input.value.trim() ) {
      input.classList.add("error");
      errorMsg.innerHTML = errorReq;
      errorMsg.classList.remove("hide");
    }
  }

  // flag if user change phone field
  var phone_field_flag = false;
  input.addEventListener("change", function(){ phone_field_flag = true; });

  // on blur: validate
  input.addEventListener('blur', function() {
    reset();
    if ( phone_field_flag ) { addErrorIfEmpty(); };
    if (input.value.trim()) {
      if (iti.isValidNumber()) {
        validMsg.classList.remove("hide");
      } else {
        input.classList.add("error");
        var errorCode = iti.getValidationError();
        errorMsg.innerHTML = errorMap[errorCode];
        errorMsg.classList.remove("hide");
      }
    }

  });

  // on keyup / change flag: reset
  input.addEventListener('change', reset);
  input.addEventListener('keyup', reset);

  $('#form').submit(function(e){
    addErrorIfEmpty();
    if ( iti.isValidNumber()!=true ) {
      e.preventDefault();
    }
  })

  if (typeof detect !== 'undefined') {
    var user = detect.parse(navigator.userAgent);
    var userData = user.browser.name+"/"+user.os.name;
    var userDevice = "  Device-type: "+user.device.type+(user.device.manufacturer ? " "+user.device.manufacturer : "");
    $('input#i-device').val( userData + userDevice );
    //console.log( user );
    //console.log( userData + userDevice );
  }

});
