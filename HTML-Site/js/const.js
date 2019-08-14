
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
 * Constant array of all pages in the "pages" directory, mainly used for handling paths in css switching.
 */
const pages = [ "contact.php", "hobbies.php" ];

/*
 * Function to get the name of the current page
 */
function getPageName() {
  return $(location).attr('href').split("/").pop();
}

window.exports = {
  success,
  error,
  pages,
  getPageName
};
