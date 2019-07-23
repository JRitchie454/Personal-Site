const success = Swal.mixin({
    type: 'success',
    position: 'top-end',
    showConfirmButton: false,
    timer: 1500,
    toast: true
});

function selectTheme() {
  Swal.fire({
    title: 'Select a Theme',
    type: 'question',
    showCancelButton: true,
    confirmButtonColor: '#00e3c6',
    cancelButtonColor: '#db0000',
    confirmButtonText: 'Blue',
    cancelButtonText: 'Red',
    allowOutsideClick: false,
  }).then((r) => {
    if (r.value) {
      document.getElementById('currentCSS').href = "css/master-blue.css";
      success.fire({ title: "Blue Theme Selected!" });
    } else {
      document.getElementById('currentCSS').href = "css/master-red.css";
      success.fire({ title: "Red Theme Selected!" });
    }
  });
}
