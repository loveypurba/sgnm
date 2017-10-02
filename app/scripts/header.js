(function () {
  var $btnPrimaryNavigation = $( '#btnPrimaryNavigation' );

  var toggleNavigationMenu = function() {
    var $primaryNavigation = $('#primaryNavigation');
    $primaryNavigation.toggle();
  }

  $btnPrimaryNavigation.on( 'click', toggleNavigationMenu );

}());