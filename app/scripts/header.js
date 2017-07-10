(function() {
  var btnPrimaryNavigation = document.getElementById( 'btnPrimaryNavigation' );
  var primaryNavigation = document.getElementById

  var toggleNavigationMenu = function(ev) {
    var primaryNavigation = document.getElementById('primaryNavigation');

    primaryNavigation.style.display = (primaryNavigation.style.display === 'none') ? 'block' : 'none' ;
  }

  btnPrimaryNavigation.addEventListener('click', toggleNavigationMenu)
})();