/*
 * In this script a combination of both Sweetalert and Sweetalert2 is used.
 * This is due to limitations from both scripts.
 * Sweetalert 1 cannot display toast-style popups that are needed to notify the user of the theme switching.
 * Sweetalert 2 does not allow us to add extra selection buttons to the popup modal without a lot of HTML code.
 */

/*
 * Standard Success notification toast (sweetalert2), shown for 1.5 seconds in the top right corner of the page.
 * This will likely be moved to a globals file as the site grows and the toast is needed for oher functions.
 */
const success = Swal.mixin({
    type: 'success',
    position: 'top-end',
    showConfirmButton: false,
    timer: 1500,
    toast: true
});

/*
 * Standard Error notification toast (sweetalert2), shown for 1.5 seconds in the top right corner of the page.
 * This will likely be moved to a globals file as the site grows and the toast is needed for oher functions.
 */
const error = Swal.mixin({
  type: 'error',
  position: 'top-end',
  showConfirmButton: false,
  timer: 1500,
  toast: true
});

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
      var pageName = $(location).attr('href').split("/").pop();
      var cssPath = "css/master-".concat(val.toLowerCase(),".css");
      if (pages.includes(pageName.valueOf())) { cssPath = "../".concat(cssPath); }

      $('#currentCSS').attr('href', cssPath);
      success.fire({ title: val + " Theme Selected!" });
    } else {
      error.fire({ title: "Theme not switched" });
    }
  });
}
