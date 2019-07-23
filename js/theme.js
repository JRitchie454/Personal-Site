function selectTheme() {
  Swal.fire({
    title: 'Select a Theme',
    type: 'question',
    showCancelButton: true,
    confirmButtonColor: '#00e3c6',
    cancelButtonColor: '#db0000',
    confirmButtonText: 'Blue',
    cancelButtonText: 'Red'
  }).then((r) => {
    if (r.value) {
      document.getElementById('currentCSS').href = "css/master-blue.css";
    } else {
      document.getElementById('currentCSS').href = "css/master-red.css";
    }
  });
}
