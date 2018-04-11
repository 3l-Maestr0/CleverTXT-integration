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
    <a class="my-5 py-5 up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
      <i class="fas fa-chevron-up"></i>
    </a>

		<div class="my-5 d-md-flex flex-md-row align-items-md-center justify-content-md-center">
      <div class="col-md-2 p-2">
        <img src="<?php bloginfo("template_directory"); ?>/images/footer-1.png" alt="" width="150">
      </div>
      <div class="col-md-6 text-left p-2">
        <h2>Essayer gratuitement CleverTXT</h2>
        <p>Créez un compte en version bêta <strong>dès maintenant</strong></p>
      </div>
      <div class="col-md-4 p-2">
        <a href="#" role="button" class="btn btn-lg btn-block btn-default btn-grad-roor">Créez un compte bêta dès maintenant <img class="ml-2 icon" src="<?php bloginfo("template_directory"); ?>/images/icon-arrow-white.svg"></a>
      </div>
    </div>

    <div class="my-5 d-md-flex flex-md-row align-items-md-center justify-content-md-center">
      <div class="col-md-2 p-2">
        <img src="<?php bloginfo("template_directory"); ?>/images/footer-2.svg" alt="" width="150">
      </div>
      <div class="col-md-6 text-left p-2">
        <h2>Demander une démo CleverTXT</h2>
        <p>Prenez rendez-vous pour une présentation de la solution <br><strong>- Gratuit & Rapide -</strong></p>
      </div>
      <div class="col-md-4 p-2">
        <a href="#" role="button" class="btn btn-lg btn-block btn-default btn-blanc-or">Demander une démo <img class="ml-2 icon" src="<?php bloginfo("template_directory"); ?>/images/icon-arrow-orange.svg"></a>
      </div>
    </div>

    <hr width="90%">

    <div class="d-md-flex align-items-md-center">
      <nav class="nav mh-100 flex-md-column justify-content-md-start p-2">
        <div class="navbar-header">
          <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo('name'); ?></a>
        </div>
        <a href="#" class="nav-link">À propos</a>
        <a href="#" class="nav-link">Jobs / Stages</a>
      </nav>
      <nav class="nav mh-100 flex-md-column justify-content-md-start p-2">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">Ressources</a>
        </div>
        <a href="#" class="nav-link">API</a>
        <a href="#" class="nav-link">Centres d'aide</a>
      </nav>
      <div class="nav ml-auto align-self-md-center p-2">
        <a href="#" class="mr-5 nav-item"><img src="<?php bloginfo("template_directory"); ?>/images/twitter-icon.svg" alt="Twitter"></a>
        <a href="#" class="nav-item"><img src="<?php bloginfo("template_directory"); ?>/images/linkedin-icon.svg" alt="LinkedIn"></a>
      </div>
    </div>
  </footer>

  <script>
  $(document).ready(function(){
    // Initialize Tooltip
    $('[data-toggle="tooltip"]').tooltip();

    // Add mdooth scrolling to all links in navbar + footer link
    $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

      // Make sure this.hash has a value before overriding default behavior
      if (this.hash !== "") {

        // Prevent default anchor click behavior
        event.preventDefault();

        // Store hash
        var hash = this.hash;

        // Using jQuery's animate() method to add mdooth page scroll
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
