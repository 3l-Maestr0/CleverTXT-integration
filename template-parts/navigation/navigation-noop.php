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
<nav class="mb-5 navbar navbar-default navbar-fixed-top">
	<div class="container-fluid">
		<div class="navbar-header">
			<a class="navbar-brand" href="<?php bloginfo('url'); ?>">
				<img src="<?php bloginfo("template_directory"); ?>/images/clevertxt-color-horizontal.png" alt="<?php bloginfo('name'); ?>"></a>
		</div>
		<ul class="nav justify-content-end">
			<li class="nav-item"><a class="nav-link" href="<?php echo get_page_link(118); ?>">Fonctionnalités</a></li>
			<li class="nav-item"><a class="nav-link" href="<?php echo get_page_link(121); ?>">Exemples</a></li>
			<li class="nav-item"><a class="nav-link" href="<?php echo get_page_link(124); ?>">Tarifs</a></li>
			<li class="nav-item"><a href="#" role="button" class="btn btn-outline-default">Connexion</a></li>
			<li class="nav-item"><a href=" #" role="button" class="ml-3 btn btn-default btn-round-ro">Créer un compte <span class="badge badge-light">BÊTA</span></a></li>
		</ul>
	</div>
</nav>
