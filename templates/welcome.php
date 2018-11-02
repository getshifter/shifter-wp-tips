<div class="welcome-panel-content">
　<h2><?php _e( 'Getting Started Shifter' ); ?></h2>
	<div class="welcome-panel-column-container">
		<div class="welcome-panel-column">
			<h3><?php _e( 'Get Started' ); ?></h3>
			<a class="button button-primary button-hero load-customize hide-if-no-customize" href="<?php echo wp_customize_url(); ?>">Generate the site</a>
		</div>
		<div class="welcome-panel-column">
			<h3><?php _e( 'Next Steps' ); ?></h3>
			<ul>
				<li><?php printf( '<a href="%s" class="welcome-icon dashicons-admin-tools">' . __( 'Update Generator settings' ) . '</a>', admin_url( 'post-new.php' ) ); ?></li>
				<li><?php printf( '<a href="%s" class="welcome-icon welcome-view-site">' . __( 'View your site' ) . '</a>', home_url( '/' ) ); ?></li>
				<li><?php printf( '<a href="%s" class="welcome-icon dashicons-video-alt3">' . __( 'Generate the site' ) . '</a>', admin_url( 'post-new.php?post_type=page' ) ); ?></li>
			</ul>
		</div>
		<div class="welcome-panel-column welcome-panel-last">
			<h3><?php _e( 'More Actions' ); ?></h3>
			<ul>
				<li><?php printf( '<a href="%s" class="welcome-icon welcome-learn-more">' . __( 'Learn more about getting started' ) . '</a>', __( 'https://support.getshifter.io/creating-sites-on-shifter/creating-a-new-wordpress-site' ) ); ?></li>
				<li><?php printf( '<a href="%s" class="welcome-icon dashicons-editor-help">' . __( 'Docs & Support' ) . '</a>', __( 'https://support.getshifter.io' ) ); ?></li>
				<li><?php printf( '<a href="%s" class="welcome-icon dashicons-admin-post">' . __( 'Shifter Blog' ) . '</a>', __( 'https://getshifter.io/blog' ) ); ?></li>
			</ul>
		</div>
	</div>
</div>