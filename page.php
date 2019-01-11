<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>

	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/reset.css" type="text/css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">

<?php get_header(); ?>
<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>

<!--CONTAINER-->
<div id="container">
	<?php if(have_posts()): ?><?php while(have_posts()): the_post(); ?>
    	
        <div class="post" id="post-<?php the_ID(); ?>">
    		<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
        
            <div class="entry">
                <?php the_content(); ?>
                <?php link_pages('<p><strong>Pages:</strong> ', '</p>', 'number'); ?>
                <?php edit_post_link('Edit', '<p>', '</p>'); ?>                             
            </div>
            
            <div class="comments-template">
				<?php //comments_template(); ?>
            </div>
                       
        </div>
        
    <?php endwhile; ?>
      
    <?php else: ?>
    	<div class="notfound">
	    	<h2><?php _e('Not Found'); ?></h2>
        </div>
        
    <?php endif; ?>
</div>
<!--CONTAINER END-->

<?php get_sidebar(); ?>

<?php get_footer(); ?>

</div>
</body>
</html>