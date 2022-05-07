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

