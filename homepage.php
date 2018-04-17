<?php /* Template Name: homepage */?>
<?php get_header();?>

<header id="masthead">
	<?php get_template_part('template-parts/navigation/navigation', 'noop') ?>
</header>

<div class="container-fluid px-0">
	<?php get_template_part('template-parts/page/content', 'home'); ?>

<?php get_footer(); ?>
