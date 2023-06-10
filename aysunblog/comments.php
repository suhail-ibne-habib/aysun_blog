<?php 
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 */
?>

<div class="box yellow">
    <h2 class="top">Comments</h2>
    <p>
        <?php 
            if(have_comments()){
                echo get_comments_number(). " Comments";
            }else{
                echo "0 Comments";
            }
        ?>
    </p>
    
    <ul class="comments">
        <?php 
            wp_list_comments();
            paginate_comments_links( array(
                'prev_text' => '&laquo;',
                'next_text' => '&raquo;'
            ) );
        ?>
    </ul>
</div>

<div class="box yellow">
    <h2 class="top">Add a comment</h2>
    <?php 
        if(comments_open()){
            comment_form(array(
                'class_submit' => 'reply-btn'
            ));
        }
    ?>
</div>