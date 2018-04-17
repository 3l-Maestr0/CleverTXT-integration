<?php
/**
 * Displays top navigation
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

$linked = 0;
?>
<nav class="navbar navbar-expand-lg navbar-light">
	<div class="container-fluid">
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
				<li class="nav-item mr-3"><a href="#" role="button" class="mb-2 btn btn-outline-default">Connexion</a></li>
				<li class="nav-item"><a href=" #" role="button" class="mb-2 btn btn-default btn-round-ro">Créer un compte <span class="badge badge-light">BÊTA</span></a></li>
			</ul>
		</div>
	</div>
</nav>
