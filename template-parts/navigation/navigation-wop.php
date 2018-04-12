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


<ul class="nav nav-pills mb-2 justify-content-md-center" id="pills-tab" role="tablist">
	<li class="mx-3 nav-item">
		<a href="#" class="nav-link d-md-flex flex-md-column op-camp active" id="pill-scenar-tab" data-toggle="pill" role="tab" aria-controls="pill-scenar" aria-selected="true">
			<img src="<?php bloginfo('template_directory') ?>/images/fonctionnalites-campagne-scenarisee.svg" alt="Campagne scénarisée" class="mx-auto d-block p-2" width="100px">
			<p class="text-center">Campagne scénarisée</p>
		</a>
	</li>
	<li class="mx-3 nav-item">
		<a href="#" class="nav-link d-md-flex flex-md-column op-camp" id="pill-simple-tab" data-toggle="pill" role="tab" aria-controls="pill-simple" aria-selected="true">
			<img src="<?php bloginfo('template_directory') ?>/images/fonctionnalites-campagne-simple.svg" alt="Campagne simple" class="mx-auto d-block p-2" width="100px">
			<p class="text-center">Campagne simple</p>
		</a>
	</li>
</ul>
