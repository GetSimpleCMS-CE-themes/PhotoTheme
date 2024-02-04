<?php if (!defined('IN_GS')) {
    die('you cannot load this page directly.');
}

?>

<?php include('header.inc.php'); ?>

<header class="hero-section">
	<img data-aos="fade-down" data-aos-duration="1000" src="
	<?php if (r_mats('hero') !== '') : ?>
		<?php mats('hero'); ?>
	<?php else : ?>
		<?php get_theme_url(); ?>/images/hero.jpg
	<?php endif; ?>
" alt="">
	<div class="hero-section-fog"></div>
	<div class="hero-section-content  h-100">

		<div data-aos="fade-in" data-aos-delay="200" data-aos-duration="1000">
			<?php echo r_mats('herotitle') !== '' ? r_mats('herotitle') : ''; ?>
		</div>

	</div>
</header>


<section class="boxes wrapper">


	<div class="boxes-item" data-aos="fade-right" data-aos-duration="500">

		<?php if (r_mats('box1') !== '') : ?>
			<?php mats('box1'); ?>
		<?php else : ?>
			<h3>Lorem ipsum dolor</h3>
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A, minima. Deleniti perferendis excepturi esse doloribus ipsum nostrum corporis temporibus voluptatem.</p>
		<?php endif; ?>

		<a href="<?php echo r_mats('box1link') !== '' || r_mats('box1link') !== null  ? r_mats('box1link') : '#'; ?>" class="boxes-link">
			<span><?php echo r_mats('boxreadmore') !== '' ? r_mats('boxreadmore') : 'read more'; ?></span>
			<svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M11 21H12C16.9706 21 21 16.9706 21 12C21 7.02944 16.9706 3 12 3H11M11 16L15 12M15 12L11 8M15 12H3" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
			</svg>
		</a>
	</div>


	<div class="boxes-item" data-aos="fade-right" data-aos-delay="200" data-aos-duration="500">

		<?php if (r_mats('box2') !== '') : ?>
			<?php mats('box2'); ?>
		<?php else : ?>
			<h3>Lorem ipsum dolor</h3>
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A, minima. Deleniti perferendis excepturi esse doloribus ipsum nostrum corporis temporibus voluptatem.</p>
		<?php endif; ?>
		<a href="<?php echo r_mats('box2link') !== '' || r_mats('box2link') !== null  ? r_mats('box2link') : '#'; ?>" class="boxes-link">
			<span><?php echo r_mats('boxreadmore') !== '' ? r_mats('boxreadmore') : 'read more'; ?></span>
			<svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M11 21H12C16.9706 21 21 16.9706 21 12C21 7.02944 16.9706 3 12 3H11M11 16L15 12M15 12L11 8M15 12H3" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
			</svg>
		</a>
	</div>

	<div class="boxes-item" data-aos="fade-right" data-aos-delay="400" data-aos-duration="500">

		<?php if (r_mats('box3') !== '') : ?>
			<?php mats('box3'); ?>
		<?php else : ?>
			<h3>Lorem ipsum dolor</h3>
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A, minima. Deleniti perferendis excepturi esse doloribus ipsum nostrum corporis temporibus voluptatem.</p>
		<?php endif; ?>

		<a href="<?php echo r_mats('box3link') !== '' || r_mats('box3link') !== null  ? r_mats('box3link') : '#'; ?>" class="boxes-link">
			<span><?php echo r_mats('boxreadmore') !== '' ? r_mats('boxreadmore') : 'read more'; ?></span>
			<svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M11 21H12C16.9706 21 21 16.9706 21 12C21 7.02944 16.9706 3 12 3H11M11 16L15 12M15 12L11 8M15 12H3" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
			</svg>
		</a>
	</div>


</section>


<section class="about-section" data-aos="fade-in" data-aos-duration="500">
	<div class="wrapper about-section-content">

		<div class="about-section-content-foto" data-aos="fade-up">
			<div class="about-section-content-foto-triangle"></div>
			<img src="<?php if (r_mats('aboutfoto1') !== '') : ?>
				<?php mats('aboutfoto1'); ?>
			<?php else : ?>
			<?php get_theme_url(); ?>/images/p1.jpg
			<?php endif; ?>
				">
		</div>
		<div class="about-section-content-foto" data-aos="fade-up" data-aos-delay="200">
			<div class="about-section-content-foto-triangle"></div>
			<img src="<?php if (r_mats('aboutfoto2') !== '') : ?>
				<?php mats('aboutfoto2'); ?>
			<?php else : ?>
			<?php get_theme_url(); ?>/images/p2.jpg
			<?php endif; ?>
				">
		</div>

		<div class="about-section-content-text" data-aos="fade-in" data-aos-delay="400">
			<?php mats('about'); ?>
		</div>
	</div>
</section>


<section class="link-section">

	<a class="link-section-link" href="<?php echo r_mats('linker1l') !== '' || r_mats !== null ? r_mats('linker1l') : '#'; ?>">
		<img src="
		<?php if (r_mats('linker1') !== '') : ?>
				<?php mats('linker1'); ?>
			<?php else : ?>
				<?php get_theme_url(); ?>/images/s2.jpg
			<?php endif; ?>
		" alt="">
		<h4 class="link-section-link-title"><?php echo r_mats('linker1t') !== '' ? r_mats('linker1t') : 'Lorem ipsum'; ?></h4>
	</a>


	<a class="link-section-link" href="<?php echo r_mats('linker2l') !== '' || r_mats !== null ? r_mats('linker2l') : '#'; ?>">
		<img src="
		<?php if (r_mats('linker2') !== '') : ?>
				<?php mats('linker2'); ?>
			<?php else : ?>
				<?php get_theme_url(); ?>/images/s1.jpg
			<?php endif; ?>
		" alt="">
		<h4 class="link-section-link-title"><?php echo r_mats('linker2t') !== '' ? r_mats('linker2t') : 'Lorem ipsum'; ?></h4>
	</a>


	<a class="link-section-link" href="<?php echo r_mats('linker3l') !== '' || r_mats !== null ? r_mats('linker3l') : '#'; ?>">
		<img src="
		<?php if (r_mats('linker3') !== '') : ?>
				<?php mats('linker3'); ?>
			<?php else : ?>
				<?php get_theme_url(); ?>/images/s3.jpg
			<?php endif; ?>
		" alt="">
		<h4 class="link-section-link-title"><?php echo r_mats('linker3t') !== '' ? r_mats('linker3t') : 'Lorem ipsum'; ?></h4>
	</a>


	<a class="link-section-link" href="<?php echo r_mats('linker4l') !== '' || r_mats !== null ? r_mats('linker4l') : '#'; ?>">
		<img src="
		<?php if (r_mats('linker4') !== '') : ?>
				<?php mats('linker4'); ?>
			<?php else : ?>
				<?php get_theme_url(); ?>/images/s4.jpg
			<?php endif; ?>
		" alt="">
		<h4 class="link-section-link-title"><?php echo r_mats('linker4t') !== '' ? r_mats('linker4t') : 'Lorem ipsum'; ?></h4>
	</a>

</section>



<?php include('footer.inc.php'); ?>