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
    var pageName = location.pathname.split("/").pop();
    var prefix = "";
    if (pageName !== "index.html" || pageName !== "") {
      prefix = "../";
    }
    switch (val) {
      case "Ice":
        document.getElementById('currentCSS').href = prefix + "css/master-ice.css";
        success.fire({ title: "Ice Theme Selected!" });
        break;
      case "Fire":
        document.getElementById('currentCSS').href = prefix + "css/master-fire.css";
        success.fire({ title: "Fire Theme Selected!" });
        break;
      case "Dark":
        document.getElementById('currentCSS').href = prefix + "css/master-dark.css";
        success.fire({ title: "Dark Theme Selected!" });
        break;
      case "Light":
        document.getElementById('currentCSS').href = prefix + "css/master-light.css";
        success.fire({ title: "Light Theme Selected!" });
        break;
      default:
        error.fire({ title: "Theme not switched" });
    }
  });
}
