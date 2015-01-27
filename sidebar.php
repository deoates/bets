<aside id="sidebar" role="complementary">
<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
<?php #if ( is_active_sidebar( 'primary-widget-area' ) ) : ?>
<div id="primary" class="widget-area">
<ul class="xoxo">
<?php #dynamic_sidebar( 'primary-widget-area' ); ?>
</ul>
</div>
<?php endif; ?>
</aside>
