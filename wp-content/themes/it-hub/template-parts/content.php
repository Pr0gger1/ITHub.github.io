<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package IT_Hub
 */
$content_exist = boolval(get_the_content());
?>
<div class="container">
    <div class="info-block">
        <?php if(!strlen(get_the_tag_list())):?>
        <style>
            .icon-tag{
                display: none;
            }
            .info-block{
                display: block !important;
            }
        </style>
        <?php endif;?>
        <div class="tags">
            <span class="icon-tag tags__icon"></span>
            <?php the_tags(""); ?> </div>
        <div class="publication-date"><?php the_time("F j Y"); ?></div>
    </div>

    <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
        <div id="title-post">
            <?php the_title();?>
        </div>
        <div class="preview-article">
            <?php the_post_thumbnail(); ?>
        </div>

        <?php the_content(); ?>
    </article>
</div>

