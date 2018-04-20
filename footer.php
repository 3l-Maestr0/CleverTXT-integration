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
  <a class="cd-top js-cd-top" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <i class="fas fa-chevron-up"></i>
  </a>

</div>
<footer class="text-center">

	<div class="py-5 d-md-flex flex-md-row align-items-md-center justify-content-md-center">
    <div class="col-md-2 p-2">
      <img src="<?php bloginfo("template_directory"); ?>/images/footer-1.png" alt="" width="150">
    </div>
    <div class="col-md-6 text-left p-2">
      <h2>Essayer gratuitement CleverTXT</h2>
      <p>Créez un compte en version bêta <strong>dès maintenant</strong></p>
    </div>
    <div class="col-md-4 p-2">
      <a href="https://app.clevertxt.com/register" role="button" class="btn btn-lg btn-block btn-default btn-grad-roor">
        <span class="mx-auto text-center">
          Créez un compte bêta dès maintenant
        </span>
        <img class="ml-2 icon" src="<?php bloginfo("template_directory"); ?>/images/icon-arrow-white.svg">
      </a>
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
(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip();
  var screenWidth = screen.width;
	var backTop = document.getElementsByClassName('js-cd-top')[0],
    backTopWidth = backTop.offsetWidth,
		// browser window scroll (in pixels) after which the "back to top" link is shown
		offset = 150,
		//browser window scroll (in pixels) after which the "back to top" link opacity is reduced
		scrollDuration = 700
		scrolling = false;
    backTop.style.left = screen.width/2 - backTopWidth/2 + "px";
	if( backTop ) {
		//update back to top visibility on scrolling
		window.addEventListener("scroll", function(event) {
			if( !scrolling ) {
				scrolling = true;
				(!window.requestAnimationFrame) ? setTimeout(checkBackToTop, 250) : window.requestAnimationFrame(checkBackToTop);
			}
		});
		//smooth scroll to top
		backTop.addEventListener('click', function(event) {
			event.preventDefault();
			(!window.requestAnimationFrame) ? window.scrollTo(0, 0) : scrollTop(scrollDuration);
		});
	}

	function checkBackToTop() {
		var windowTop = window.scrollY || document.documentElement.scrollTop;
		( windowTop > offset ) ? addClass(backTop, 'cd-top--show') : removeClass(backTop, 'cd-top--show', 'cd-top--fade-out');
		scrolling = false;
	}

	function scrollTop(duration) {
	    var start = window.scrollY || document.documentElement.scrollTop,
	        currentTime = null;

	    var animateScroll = function(timestamp){
	    	if (!currentTime) currentTime = timestamp;
	        var progress = timestamp - currentTime;
	        var val = Math.max(Math.easeInOutQuad(progress, start, -start, duration), 0);
	        window.scrollTo(0, val);
	        if(progress < duration) {
	            window.requestAnimationFrame(animateScroll);
	        }
	    };

	    window.requestAnimationFrame(animateScroll);
	}

	Math.easeInOutQuad = function (t, b, c, d) {
 		t /= d/2;
		if (t < 1) return c/2*t*t + b;
		t--;
		return -c/2 * (t*(t-2) - 1) + b;
	};

	//class manipulations - needed if classList is not supported
	function hasClass(el, className) {
	  	if (el.classList) return el.classList.contains(className);
	  	else return !!el.className.match(new RegExp('(\\s|^)' + className + '(\\s|$)'));
	}
	function addClass(el, className) {
		var classList = className.split(' ');
	 	if (el.classList) el.classList.add(classList[0]);
	 	else if (!hasClass(el, classList[0])) el.className += " " + classList[0];
	 	if (classList.length > 1) addClass(el, classList.slice(1).join(' '));
	}
	function removeClass(el, className) {
		var classList = className.split(' ');
	  	if (el.classList) el.classList.remove(classList[0]);
	  	else if(hasClass(el, classList[0])) {
	  		var reg = new RegExp('(\\s|^)' + classList[0] + '(\\s|$)');
	  		el.className=el.className.replace(reg, ' ');
	  	}
	  	if (classList.length > 1) removeClass(el, classList.slice(1).join(' '));
	}
})();
</script>

<?php wp_footer(); ?>
</body>
</html>
