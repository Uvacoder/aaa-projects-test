<aside id="sidebar" role="complementary">
	<?php if ( is_active_sidebar( 'primary-widget-area' ) ) : ?>
		<?php dynamic_sidebar( 'primary-widget-area' ); ?>
	<?php endif; ?>

    <div class="card">
        <div class="card-header">Blog Search</div>
        <div class="card-body">
            <form role="search" method="get" id="searchform" class="form-inline" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                <div>
                    <label class="sr-only" for="s">Search</label>
                    <input type="text" class="form-control mb-2 mr-sm-2" name="s" id="s" placeholder="Search..." >
                    <input type="submit" id="searchsubmit" class="btn btn-sm btn-primary mb-2" value="Search" />
                </div>
            </form>
        </div>
    </div>

    <div class="card">
        <div class="card-header">Recent Blog Posts</div>
		<?php $recentPosts = wp_get_recent_posts(); ?>
        <div class="list-group">
			<?php foreach($recentPosts as $recentPost) {
				$rpTitle = $recentPost['post_title'];
				$rpLink = get_permalink($recentPost['ID']);
				?>
                <a href="<?php echo $rpLink;  ?>" class="list-group-item list-group-item-action"><?php echo $rpTitle; ?></a>
			<?php } ?>
        </div>
    </div>

    <div class="card">
        <div class="card-header">Blog Categories</div>
		<?php $blogCategories = get_categories(); ?>
        <div class="list-group">
			<?php foreach($blogCategories as $blogCategory) {
				$bCatTitle = $blogCategory->name;
				$bCatLink = get_permalink($blogCategory->ID);
				?>
                <a href="<?php echo $bCatLink;  ?>" class="list-group-item list-group-item-action"><?php echo $bCatTitle; ?></a>
			<?php } ?>
        </div>
    </div>

    <div class="card">
        <div class="card-header">Blog Archives</div>
        <div class="card-body">
            <select class="custom-select">
				<?php $args = array(
					'type'            => 'monthly',
					'limit'           => '',
					'format'          => 'option',
					'before'          => '',
					'after'           => '',
					'show_post_count' => false,
					'echo'            => 1,
					'order'           => 'DESC',
					'post_type'     => 'post'
				);
				wp_get_archives( $args ); ?>
            </select>
        </div>
    </div>
</aside>