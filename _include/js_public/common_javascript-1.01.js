// Broken out to include the accessibility add-in as well.
function markAsActive(element) {
  $(element).addClass("active");
  $(element).append('<span class="sr-only active"> (current)</span>'); // active-sr-item is my creation for removing the spans
}

// Used to identify URL path names and then mark them as active in the nav bar
function setActivePage() {
  var atHome = true; // assume home until another fragment is found
  var path = document.location.pathname.split('/');

  for (let i = path.length; i > 0; i-- ) {
    let pathFragment = path[(i - 1)]; // -1 because array starts at 0
    if ( pathFragment ) {
      atHome = false; // if we find another fragment, we know we're not at home
      markAsActive(`#${pathFragment}-dropdown`);
    }
  }
  // mark home active if no other fragments found
  if ( atHome ) {
    markAsActive("#home-dropdown");
  }
}

// Make md5 popovers work (make a function we call because php reload will need to reload function)
// I use it this way so if I wanted to change hover to something else I can change just this one place in the code
function activatePopovers() {
  $('[data-toggle="popover"]').popover({trigger:"hover click"})
}

function afterPageLoad() {
  // Set active page and turn on popovers
  setActivePage();
  activatePopovers();
}

// Run after page load
afterPageLoad();
