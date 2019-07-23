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
    showCancelButton: false,
    showConfirmButton: false,
    allowOutsideClick: false,
    buttons: {
      Ice: "Ice",
      Fire: "Fire",
      Dark: "Dark",
      Light: "Light"
    }
  }).then((val) => {
    var pageName = location.pathname.split("/").pop();
    var prefix = "";
    if (pageName !== "index.html") {
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
