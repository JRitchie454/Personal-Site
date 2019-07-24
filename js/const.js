
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

function getPageName() {
  return $(location).attr('href').split("/").pop();
}

window.exports = {
  success,
  error,
  getPageName
};
