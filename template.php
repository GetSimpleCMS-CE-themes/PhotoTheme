<?php if (!defined('IN_GS')) { die('you cannot load this page directly.'); } ?>
<?php include('header.inc.php'); ?>

<header class="title">
	<img src="
	<?php if (r_mats('hero') !== '') : ?>
		<?php mats('hero'); ?>
	<?php else : ?>
		<?php get_theme_url(); ?>/images/hero.jpg
	<?php endif; ?>
	" class="title-bg" data-aos="fade-down" data-aos-duration="1000" alt="">
	<div class="title-fog"></div>
	<div class="wrapper title-content" data-aos="fade-down" data-aos-duration="500">
		<h1><?php get_page_title(); ?></h1>
	</div>
</header>

<main class="wrapper main-section" data-aos="fade-down" data-aos-duration="700">
	<?php get_page_content(); ?>
</main>

<?php include('footer.inc.php'); ?>
