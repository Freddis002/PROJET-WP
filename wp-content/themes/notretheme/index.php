
<?php
get_header();
?>

<?php
if (have_posts()) {
    while (have_posts()) {
        the_post();
        the_title();
        the_content();
        /*the_excerpt();*/
    }
}

?>
<?php
get_footer();
?>