<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link
 *
 * @package Mine
 * @subpackage BootSTheme
 * @since 1.0
 * @version 1.0
 */

?>

  </div>
  <footer class="text-center">
    <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
      <span class="glyphicon glyphicon-chevron-up"></span>
    </a>

		<div class="jumbotron jumbotron-fluid">
			<h2>Essayer gratuitement CleverTXT</h2>
			<p>Créez un compte en version bêta <strong>dès maintenant</strong></p>
		</div>

		<div class="jumbotron jumbotron-fluid">
			<h2>Demander une démo CleverTXT</h2>
			<p>Prenez rendez-vous pour une présentation de la solution <br><strong>- Gratuit & Rapide -</strong></p>
		</div>

    <hr width="90%">

    <div class="row">
      <div class="col">
        <ul class="navbar flex-column">
          <li class="navbar-brand">CleverTXT</li>
          <li class="nav-item">à propos</li>
          <li class="nav-item">jobs / stages</li>
        </ul>
      </div>
      <div class="col">
        <ul class="navbar flex-column">
          <li class="navbar-brand">Ressources</li>
          <li class="nav-item">API</li>
          <li class="nav-item">Centre d'aide</li>
        </ul>
      </div>
    </div>
  </footer>

  <script>
  $(document).ready(function(){
    // Initialize Tooltip
    $('[data-toggle="tooltip"]').tooltip();

    // Add smooth scrolling to all links in navbar + footer link
    $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

      // Make sure this.hash has a value before overriding default behavior
      if (this.hash !== "") {

        // Prevent default anchor click behavior
        event.preventDefault();

        // Store hash
        var hash = this.hash;

        // Using jQuery's animate() method to add smooth page scroll
        // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
        $('html, body').animate({
          scrollTop: $(hash).offset().top
        }, 900, function(){

          // Add hash (#) to URL when done scrolling (default click behavior)
          window.location.hash = hash;
        });
      } // End if
    });
  })
  </script>

  <?php wp_footer(); ?>
</body>
</html>
