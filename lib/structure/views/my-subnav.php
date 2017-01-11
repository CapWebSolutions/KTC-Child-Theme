<nav class="nav-secondary" itemscope itemtype="http://schema.org/SiteNavigationElement">
	<div class="wrap">
		<ul id="menu-secondary-nav" class="menu genesis-nav-menu menu-secondary">
			<li class="menu-item menu__account<?php if ( is_page( 'account' ) ) { echo ' current-menu-item'; } ?>">
				<a href="<?php echo fulcrum_get_url_relative_to_home_url( 'account' ); ?>" itemprop="url"><span itemprop="name"><i class="fa fa-tachometer" aria-hidden="true"></i> My Account</span></a>
			</li>
			<li class="menu-item menu__account<?php if ( is_page( 'your-activity-history' ) ) { echo ' current-menu-item'; } ?>">
				<a href="<?php echo fulcrum_get_url_relative_to_home_url( 'your-activity-history' ); ?>" itemprop="url"><span itemprop="name"><i class="fa fa-history" aria-hidden="true"></i> My Viewing History</span></a>
			</li>
			<?php if ( is_user_logged_in() ) : ?>
				<li class="menu-item menu__proforums">
					<a href="<?php echo fulcrum_get_url_relative_to_home_url( 'forums' ); ?>" itemprop="url"><span itemprop="name"><i class="fa fa-life-ring" aria-hidden="true"></i> Pro Forums</span></a>
				</li>
				<li class="menu-item menu__account<?php if ( is_page( 'thank-you' ) ) { echo ' current-menu-item'; } ?>">
					<a href="<?php echo fulcrum_get_url_relative_to_home_url( 'thank-you' ); ?>" itemprop="url"><span itemprop="name"><i class="fa fa-life-ring" aria-hidden="true"></i> Orientation</span></a>
				</li>
			<?php endif; ?>
			<li class="menu-item menu__whatsnew<?php if ( is_page( 'whats-new' ) ) { echo ' current-menu-item'; } ?>">
				<a href="<?php echo fulcrum_get_url_relative_to_home_url( 'whats-new' ); ?>" itemprop="url"><span itemprop="name"><i class="fa fa-plus-circle" aria-hidden="true"></i> What's New</span></a>
			</li>
			<li class="menu-item menu__whatscoming<?php if ( is_page( 'whats-coming' ) ) { echo ' current-menu-item'; } ?>">
				<a href="<?php echo fulcrum_get_url_relative_to_home_url( 'whats-coming' ); ?>" itemprop="url"><span itemprop="name"><i class="fa fa-plus-circle" aria-hidden="true"></i> What's Coming</span></a>
			</li>
		</ul>
	</div>
</nav>