<?php if (!defined('IN_GS')) {
    die('you cannot load this page directly.');
}
/****************************************************
 *
 * @File: 		header.inc.php
 * @Package:	GetSimple CE
 * @Action:		Starter for GetSimple CMS CE
 *
 *****************************************************/
?>


<!DOCTYPE html data->
<?php if (!defined('IN_GS')) {
    die('you cannot load this page directly.');
}

?>

<html data-theme="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php get_page_clean_title(); ?> | <?php get_site_name(); ?></title>
    <link rel="stylesheet" type="text/css" href="<?php get_theme_url(); ?>/css/pico.min.css">

    <link rel="stylesheet" type="text/css" href="<?php get_theme_url(); ?>/css/style.css">

    <?php if (r_mats('animation') == 'yes') : ?>
        <link rel="stylesheet" href="<?php get_theme_url(); ?>/css/aos.css">
    <?php endif; ?>

    <?php get_header(); ?>

 

    <style>
        :root {
            --bs-red: <?php mats('rootcolor'); ?>
        }
    </style>
</head>

<body>

    <header class="header">
        <div class="container">
            <nav class="header-grid">

                <a class="contrast header-logo" href="<?php get_site_url(); ?>">

                    <span>
                        <?php if (r_mats('name') !== '') : ?>
                            <?php mats('name'); ?>
                        <?php else : ?>
                            Photo<b>Theme</b>
                        <?php endif; ?>
                    </span>

                    <svg width="40px" height="40px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3 10H4C4.93188 10 5.39782 10 5.76537 10.1522C6.25542 10.3552 6.64477 10.7446 6.84776 11.2346C7 11.6022 7 12.0681 7 13C7 13.9319 7 14.3978 6.84776 14.7654C6.64477 15.2554 6.25542 15.6448 5.76537 15.8478C5.39782 16 4.93188 16 4 16H3M19 6V5C19 3.89543 18.1046 3 17 3H15C13.8954 3 13 3.89543 13 5V6M6.2 20H17.8C18.9201 20 19.4802 20 19.908 19.782C20.2843 19.5903 20.5903 19.2843 20.782 18.908C21 18.4802 21 17.9201 21 16.8V9.2C21 8.07989 21 7.51984 20.782 7.09202C20.5903 6.71569 20.2843 6.40973 19.908 6.21799C19.4802 6 18.9201 6 17.8 6H6.2C5.0799 6 4.51984 6 4.09202 6.21799C3.71569 6.40973 3.40973 6.71569 3.21799 7.09202C3 7.51984 3 8.07989 3 9.2V16.8C3 17.9201 3 18.4802 3.21799 18.908C3.40973 19.2843 3.71569 19.5903 4.09202 19.782C4.51984 20 5.07989 20 6.2 20ZM17 13C17 14.6569 15.6569 16 14 16C12.3431 16 11 14.6569 11 13C11 11.3431 12.3431 10 14 10C15.6569 10 17 11.3431 17 13Z" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>

                </a>

                <button class="header-mobile-btn hide-desktop">
                    <img src="<?php get_theme_url(); ?>/images/bar.svg" alt="">
                </button>

                <ul class="header-nav hide-mobile">
                    <?php get_navigation(); ?>
                </ul>
                </ul>

            </nav>
        </div>
    </header>