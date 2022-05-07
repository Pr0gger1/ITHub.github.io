<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package IT_Hub
 */
get_header();
?>

<main class="content">
    <div class="container">
      <?php the_content(); ?>
    </div>
</main>

<?php
get_footer();
?>
