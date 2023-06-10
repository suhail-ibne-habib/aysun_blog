<?php 
/**
 * The template for displaying all single posts
 */
    get_header();
?>

    <div class="container">
        <div class="post-body">
            <h2 class="article-title"><?php the_title(); ?></h2>
            <div class="spacer"></div>
            <?php  
                if( have_posts() ){
                    while( have_posts() ){
                        the_post();
                        the_content();
                    }
                }
            ?>
        </div>
    </div>

<?php 
    get_footer();
?>