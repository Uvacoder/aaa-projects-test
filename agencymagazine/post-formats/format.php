<?php
/*
                 * This is the default post format.
                 *
                 * So basically this is a regular post. if you don't want to use post formats,
                 * you can just copy ths stuff in here and replace the post format thing in
                 * single.php.
                 *
                 * The other formats are SUPER basic so you can style them as you like.
                 *
                 * Again, If you want to remove post formats, just delete the post-formats
                 * folder and replace the function below with the contents of the "format.php" file.
                */
?>
<?php $postUrl = 'http' . (isset($_SERVER['HTTPS']) ? 's' : '') . '://' . "{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}"; ?>
<?php $backgroundImg = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full'); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class('article__post'); ?> role="article" itemscope itemprop="blogPost" itemtype="http://schema.org/BlogPosting">
  <div class="article-image" style="background: url('<?php echo $backgroundImg[0]; ?>'), rgba(0, 0, 0, .85); no-repeat;background-position:center;background-size:cover;"></div>
  <div class="container">
    <div class="article-header">
      <div class="article-header__meta">
        <div class="article-header__meta__categories">
          <?php printf(__('', 'bonestheme') . '%1$s', get_the_category_list(' ')); ?>
        </div>
        <h1 class="article-header__title" itemprop="headline" rel="bookmark"><?php the_title(); ?></h1>
        <span><?php printf(__('%s', 'textdomain'), get_the_modified_date()); ?></span>
      </div>
    </div>
  </div>
  </div> <?php // end article header 
          ?>

  <section class="article-content" itemprop="articleBody">
    <div class="container">
      <div class="row">
        <div class="col-sm-3 article__sidebar">
          <?php global $current_user; get_currentuserinfo(); echo get_avatar($current_user->ID); ?>
          <span>Story by<br /><a class="author-link" href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>" rel="author"><?php printf(__('%s', 'twentysixteen'), get_the_author()); ?></a></span><br />
          <div class="article__engage">
            <a target="_blank" class="article__engage__button share-twitter" href="https://twitter.com/intent/tweet?url=<?php echo $postUrl; ?>&text=<?php echo the_title(); ?>&via=<?php the_author_meta('twitter'); ?>" title="Tweet this"><i class="fab fa-twitter"></i></a>
            <a target="_blank" class="article__engage__button share-facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $postUrl; ?>" title="Share on Facebook"><i class="fab fa-facebook-square"></i></a>
            <a target="_blank" class="article__engage__button share-googleplus" href="https://www.linkedin.com/shareArticle/?mini=true&url=<?php echo $postUrl; ?>" title="Share on LinkedIn"><i class="fab fa-linkedin"></i></a>
          </div>
        </div>
        <div class="col-sm-6">
          <?php
          // the content (pretty self explanatory huh)
          the_content();

          /*
                     * Link Pages is used in case you have posts that are set to break into
                     * multiple pages. You can remove this if you don't plan on doing that.
                     *
                     * Also, breaking content up into multiple pages is a horrible experience,
                     * so don't do it. While there are SOME edge cases where this is useful, it's
                     * mostly used for people to get more ad views. It's up to you but if you want
                     * to do it, you're wrong and I hate you. (Ok, I still love you but just not as much)
                     *
                     * http://gizmodo.com/5841121/google-wants-to-help-you-avoid-stupid-annoying-multiple-page-articles
                     *
                    */
          wp_link_pages(array(
            'before'      => '<div class="page-links"><span class="page-links-title">' . __('Pages:', 'bonestheme') . '</span>',
            'after'       => '</div>',
            'link_before' => '<span>',
            'link_after'  => '</span>',
          ));
          ?>
        </div>
        <aside class="col-sm-3 article__sidebar article__sidebar__right">
          <h3>Trending Posts</h3>
          <?php get_sidebar(); ?>
        </aside>
      </div>
    </div>
  </section> <?php // end article section 
              ?>

  <footer class="article-footer">
    <div class="container">
      <?php the_tags('<p class="tags"><span class="tags-title">' . __('Tags:', 'bonestheme') . '</span> ', ', ', '</p>'); ?>
    </div>
  </footer> <?php // end article footer 
            ?>

  <?php //comments_template(); 
  ?>

</article> <?php // end article 
            ?>