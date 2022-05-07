<?php
/*
Template Name: Публикации
Template Post Type: page
 */
get_header();
?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main content">
            <div class="container">
                <h1 id="title-page">Здесь хранятся все записи, опубликованные за всё время</h1>
                <section class="articles">
                <?php
                $arg_posts =  array(
		                'orderby'        => 'date',
		                'posts_per_page' => 0,
		                'post_type'      => 'post',
		                'post_status'    => 'publish',
		                'paged'          => ( get_query_var('paged') ? get_query_var('paged') : 1 )
                );

                $wp_query = new WP_Query($arg_posts);
                while ($wp_query->have_posts()):
                    $wp_query->the_post();?>

                    <article class="article">
                        <div class="preview">
                            <a href="<?php echo get_permalink(); ?>" class="preview__link ibg"><?php the_post_thumbnail(); ?></a>
                        </div>
                        <div class="capture">
                            <div class="title-article">
                                <a href="<?php echo get_permalink(); ?>"><?php
					                $title = the_title();
					                if (strlen($title) > 25) {
						                echo substr( $title, 0, 30 );
					                }
					                else{
                                        echo $title;
                                    }
					                ?></a>
                            </div>
                            <div class="date">
                                <span class="icon-time date__icon"></span>
                                <span><?php the_time("F j H:i"); ?></span>
                            </div>
                            <div class="tags">
                                <span class="icon-tag tags__icon"></span>
				                <?php the_tags(''); ?>
                            </div>
                        </div>
                    </article>
                <?php endwhile; //end the loop
                ?>

                <?php
                wp_reset_postdata();
                ?>
                </section>


            </div>

            <div class="pagination-block">
                <?php  if (get_the_posts_pagination() == null): ?>
                    <style>
                        .pagination-block{
                            display: none;
                        }
                    </style>
                <?php else: the_posts_pagination();
                endif; ?>
            </div>

        </main>
    </div>

<?php get_footer();?>
