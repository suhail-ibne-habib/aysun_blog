<?php 
/**
 * The template for displaying 404 pages (not found)
 *
 */
    get_header();
?>

        <div class="container">
            <h2>The content couldn't be found!</h2>
            <div class="box yellow p-2 box_404">
                <h2 class="top">Search content</h2>
                <?php 
                    get_search_form();
                ?>
            </div>
        </div>


<?php
    get_footer();
?>