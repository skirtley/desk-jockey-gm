<footer>
	<div class="content">
		<div class="left-side">
			<img src="<?php bloginfo('template_directory'); ?>/img/logo_only.png" alt="Desk Jockey General Manager" /><br>
			<span class="copyright">Desk Jockey GM &copy; <?php echo date("Y") ?>.<br>
			All rights reserved.</span>
		</div>
		<div class="right-side">
			<a href="https://twitter.com/deskjockeyGM" class="twitter-follow-button" data-show-count="false" data-size="large">Follow @deskjockeyGM</a>
			<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
			<?php get_search_form(); ?>
			<?php wp_nav_menu( array('menu' => 'footer-menu' )); ?>
		</div>
		<div class="clear"></div>
	</div><!--content-->
	<?php wp_footer(); ?>
</footer>
</div><!--main-wrap-->
</body>
</html>