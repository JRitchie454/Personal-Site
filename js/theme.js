/*
 * This function starts by showing a modal (sweetalert) containing 4 buttons, one for each theme (subject to change).
 * If the user clicks one of the 4 buttons, the theme corresponding to that button is switched to and a success toast (sweetalert2) is shown.
 * If the user clicks outside of the modal, the theme selection is cancelled and an error toast (sweetalert2) is shown.
 */
function selectTheme() {
  swal({
    title: 'Select a Theme',
    icon: 'warning',
    buttons: {
      Ice: "Ice",
      Fire: "Fire",
      Dark: "Dark",
      Light: "Light"
    }
  }).then((val) => {
    if (val !== null) {
      var pages = [ "contact.html", "hobbies.html" ];
      var cssPath = "css/master-".concat(val.toLowerCase(),".css");
      if (pages.includes(getPageName().valueOf())) { cssPath = "../".concat(cssPath); }

      $('#currentCSS').attr('href', cssPath);
      success.fire({ title: val + " Theme Selected!" });
    } else {
      error.fire({ title: "Theme not switched" });
    }
  });
}
