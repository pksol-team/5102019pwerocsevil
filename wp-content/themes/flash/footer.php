<div class="clear"></div>
</div>
<footer id="footer" role="contentinfo">
<div class="footer-main">
	<div class="container">
		<div class="row">
		<div class="col-sm-12 col-md-4"><?php dynamic_sidebar( 'main menu' ); ?></div>
		<div class="col-sm-12 col-md-2"><?php dynamic_sidebar( 'social' ); ?></div>
		<div class="col-sm-12 col-md-4"><?php dynamic_sidebar( 'mobile-application' ); ?></div>
		<div class="col-sm-12 col-md-2"><?php dynamic_sidebar( 'mobile' ); ?></div>
	</div>
	</div>
</div>
<div class="footer-copy-right">
	<div class="container">
		<div class="row">
			<div class="col-md-6"><?php dynamic_sidebar( 'copy-right' ); ?></div>
			<div class="col-md-6"><?php dynamic_sidebar( 'footer-menu' ); ?></div>
		</div>
	</div>
</div>
</footer>
</div>
</div>
<?php wp_footer(); ?>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
</body>
</html>