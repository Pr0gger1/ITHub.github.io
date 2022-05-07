<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package IT_Hub
 */

get_header();
?>

    <main class="content">
        <div class="container">
            <div class="info-block">
                <div class="title-block">
                    <h1 id="title-page">Главная</h1>
                    <h2 id="comment-page">Здесь вы найдете самые свежие публикации</h2>
                </div>
                <div id="date-now" class="date-now"></div>
            </div>

            <section class="articles">
                <?php
                $posts = get_posts(
                        [
                                "numberposts" => 0,
                                "orderby" => "date",
                                "post_type" => "post"
                        ]
                );
                foreach ($posts as $post):
                    setup_postdata($post);
                    get_template_part("template-parts/post/tiles", get_post_type());
                    endforeach;
                ?>
            </section>
        </div>
    </main>
<?php
get_footer();
?>
