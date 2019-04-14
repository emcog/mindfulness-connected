<!--

Hello :)
This template is not used in this theme. I have left it here incase you wish to expand the theme later on.


<aside class="sidebar" role="complementary">

	<?php get_template_part('searchform'); ?>

	<div class="sidebar-widget">
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-1')) ?>
	</div>

	<div class="sidebar-widget">
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-2')) ?>
	</div>

</aside>