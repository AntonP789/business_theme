<?php get_header(); ?>

<?php
if (have_rows('flexible_content')) {
    while (have_rows('flexible_content')) {
        $row = the_row(true);
        $layout = get_row_layout();


        if (file_exists(get_template_directory() . '/template-parts/flexible-content/' . $layout . '.php')) {
            include(get_template_directory() . '/template-parts/flexible-content/' . $layout . '.php');
        }
    }
}
?>
</div><!-- end content -->
<?php get_footer(); ?>
<script>
</script>
