function notifyLoad() {
  var name = "";
  switch (getPageName().valueOf()) {
    case "index.html":
      name = "Homepage";
      break;
    case "hobbies.html":
      name = "Hobbies Page";
      break;
    case "contact.html":
      name = "Contact Me Page";
      break;
  }
  success.fire({
    title: "Welcome to the".concat(name),
    showConfirmButton: true,
    timer: 99999999999999999,
    position: 'bottom-end'
  });
}
