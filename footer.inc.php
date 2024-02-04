<?php if (!defined('IN_GS')) {
    die('you cannot load this page directly.');
}
 
?>


<footer class="footer">
    <div class="wrapper">

        <div class="footer-contact">
           <?php mats('footer');?>
        </div>
        <hr>
        <ul class="footer-nav">
            <?php get_navigation(); ?>
        </ul>
    </div>
</footer>

<div class="subfooter">
    <div class="wrapper">
        <a href="#">Created by Multicolor | Photo from pexels.com | Powered by GetSimple CMS CE  <?php echo date('Y');?></a>
    </div>
</div>

<script type="text/javascript" src="<?php get_theme_url(); ?>/js/script.js?v=2"></script>

<?php if(r_mats('animation')== 'yes'):?>
<script src="<?php get_theme_url(); ?>/js/aos.js"></script>
<script>
    AOS.init({
        disable: function() {
            var maxWidth = 800;
            return window.innerWidth < maxWidth;
        }
    });
</script>
<?php endif;?>

<?php get_footer(); ?>
</body>

</html>