<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package IT_Hub
 */

get_header();
$content_exist = boolval(get_the_content());
?>
	<main id="primary" class="site-main content">

		<?php
		while ( have_posts() ) :
			the_post();
			get_template_part( 'template-parts/content', get_post_type() );?>

		<?php endwhile; // End of the loop.
		?>

	</main>
    <main class="content second">
        <div class="container">

            <div id="mailing-block">
                <div class="like-text">
                    <span class="icon-heart"></span>
                    <span class="text">Понравилась публикация?<br>Тогда можете подписаться на рассылку нашего ресурса</span>
                </div>
			    <?php
			    $form_widget = new \MailPoet\Form\Widget();
			    echo $form_widget->widget(array('form' => 2, 'form_type' => 'php')); ?>
                <!--        <div class="mail-box">-->
                <!--            <input type="email" class="subscribe-post" placeholder="Введите свой e-mail">-->
                <!--            <button class="send-mail"><span class="icon-mail"></span></button>-->
                <!--        </div>-->
            </div>

            <div class="look-other-articles">
			    <?php if ($content_exist): ?>
                    ...или посмотрите другие публикации
			    <?php else: ?>Упс.. кажется, здесь ничего нет. Посмотрите пока другие публикации
                    <style>
                        #mailing-block{
                            display: none !important;
                        }
                        .preview-article{
                            float: none;
                            display: none;
                        }
                    </style>
			    <?php endif;?>
            </div>
		    <?php get_template_part('template-parts/post/latest', get_post_type()); ?>
        </div>
    </main>

<?php
//comments_template();
get_footer();
