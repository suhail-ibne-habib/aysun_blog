<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 */
?>

</main>

<footer>
        <div class="container">
            <div class="grid-4">
                <div class="footer-widget-1">
                    <?php
                        dynamic_sidebar('footer-widget-1');
                    ?>
                </div>
                <div class="footer-widget-2">
                    <?php
                        dynamic_sidebar('footer-widget-2');
                    ?>
                </div>
                <div class="footer-widget-3">
                    <?php
                        dynamic_sidebar('footer-widget-3');
                    ?>
                </div>
                <div class="footer-widget-4">
                    <?php
                        dynamic_sidebar('footer-widget-4');
                    ?>
                </div>
            </div>
            <?php 
                $year = date("Y");
            ?>
            <p>Copyright (c) <?php echo $year; ?> Suhail_Habib</p>
        </div>
    </footer>

    <?php 
        wp_footer();
    ?>
</body>
</html>