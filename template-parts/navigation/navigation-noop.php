<?php
/**
 * Displays top navigation
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>
<nav class="mb-5 navbar navbar-default navbar-fixed-top">
	<div class="container-fluid">
		<div class="navbar-header">
			<a class="navbar-brand" href="<?php echo bloginfo('url'); ?>">
				<img src="<?php bloginfo("template_directory"); ?>/images/clevertxt-color-horizontal.png" alt="<?php bloginfo('name'); ?>"></a>
		</div>
		<ul class="nav justify-content-end">
			<li class="nav-item"><a class="nav-link" href="<?php echo esc_url( home_url( '/' ) ); ?>/fonctionnalites/">Fonctionnalités</a></li>
			<li class="nav-item"><a class="nav-link" href="#">Exemples</a></li>
			<li class="nav-item"><a class="nav-link" href="#">Tarifs</a></li>
			<li class="nav-item"><a href="#" role="button" class="btn btn-outline-default">Connexion</a></li>
			<li class="nav-item"><a href=" #" role="button" class="ml-3 btn btn-default btn-round-ro">Créer un compte <span class="badge badge-light">BÊTA</span></a></li>
		</ul>
	</div>
</nav>
