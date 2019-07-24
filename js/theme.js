/*
 * In this script a combination of both Sweetalert and Sweetalert2 is used.
 * This is due to limitations from both scripts.
 * Sweetalert 1 cannot display toast-style popups that are needed to notify the user of the theme switching.
 * Sweetalert 2 does not allow us to add extra selection buttons to the popup modal without a lot of HTML code.
 */

const success = Swal.mixin({
    type: 'success',
    position: 'top-end',
    showConfirmButton: false,
    timer: 1500,
    toast: true
});

const error = Swal.mixin({
  type: 'error',
  position: 'top-end',
  showConfirmButton: false,
  timer: 1500,
  toast: true
});

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
    var pages = [ "contact.html", "hobbies.html" ];
    var pageName = $(location).attr('href').split("/").pop();
    var cssPath = "css/master-".concat(val.toLowerCase(),".css");
    if (pages.includes(pageName.valueOf())) { cssPath = "../".concat(cssPath); }

    switch (val) {
      case "Ice":
      case "Fire":
      case "Dark":
      case "Light":
        $('#currentCSS').attr('href', cssPath);
        success.fire({ title: val + " Theme Selected!" });
        break;
      default:
        error.fire({ title: "Theme not switched" });
    }
  });
}
