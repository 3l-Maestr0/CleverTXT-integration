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
<nav class="navbar navbar-expand-lg navbar-light">
	<div class="container">
		<div class="navbar-header">
			<a class="navbar-brand" href="<?php bloginfo('url'); ?>">
				<img src="<?php bloginfo("template_directory"); ?>/images/clevertxt-color-horizontal.png" alt="<?php bloginfo('name'); ?>">
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNav" aria-controls="myNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
		</div>
		<div class="collapse navbar-collapse" id="myNav">
			<ul class="nav navbar-nav ml-auto">
				<li class="nav-item mr-3"><a class="nav-link" href="<?php echo get_page_link(118); ?>">Fonctionnalités</a></li>
				<li class="nav-item mr-3"><a class="nav-link" href="<?php echo get_page_link(121); ?>">Exemples</a></li>
				<li class="nav-item mr-3"><a class="nav-link" href="<?php echo get_page_link(124); ?>">Tarifs</a></li>
				<li class="nav-item mr-3"><a href="https://app.clevertxt.com/login" role="button" class="mb-2 btn btn-outline-default">Connexion</a></li>
				<li class="nav-item"><a href="https://app.clevertxt.com/register" role="button" class="mb-2 btn btn-default btn-round-ro">Créer un compte <span class="badge badge-light">BÊTA</span></a></li>
			</ul>
		</div>
	</div>
</nav>

<ul class="my-5 py-5 nav nav-pills justify-content-md-center" id="pills-tab" role="tablist">
	<li class="nav-item col-md-2">
		<a class="nav-link op-camp active py-4" id="pill-scenar-tab" data-toggle="pill" href="#pill-scenar" role="tab" aria-controls="pill-scenar" aria-selected="true">
			<img src="<?php bloginfo('template_directory') ?>/images/fonctionnalites-campagne-scenarisee.svg" alt="Campagne scénarisée" class="mx-auto d-block img-fluid" width="100px">
			<span class="text-dark mx-auto d-block text-center">Campagne scénarisée</span>
		</a>
	</li>
	<li class="nav-item col-md-2 offset-md-1">
		<a class="nav-link op-camp py-4" id="pill-simple-tab" data-toggle="pill" role="tab" href="#pill-simple" aria-controls="pill-simple" aria-selected="false">
			<img src="<?php bloginfo('template_directory') ?>/images/fonctionnalites-campagne-simple.svg" alt="Campagne simple" class="mx-auto d-block img-fluid" width="100px">
			<span class="text-dark mx-auto d-block text-center">Campagne simple</span>
		</a>
	</li>
</ul>
