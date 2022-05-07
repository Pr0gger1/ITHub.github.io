<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package IT_Hub
 */
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php
        if (is_single() && have_posts()) {
		    the_post();
		    the_title();
		    rewind_posts(); //needed so that the call to The Loop on single.php will find the posts
	    } else {
		    bloginfo('name');
	    } ?>
    </title>

    <!-- Шрифты -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&family=Roboto:wght@100&display=swap" rel="stylesheet">

<?php wp_head();?>
</head>

<body data-page="main">
<div class="wrapper">
    <header class="header">
        <div class="header__container">
            <div class="header__logo-n-slogan">
	            <?php the_custom_logo(); ?>
                <div data-da=".menu__list,550,0" class="header__slogan">Не баг, а фича</div>
            </div>
            <div class="header__menu menu">
                <div class="menu__icon">
                    <span></span>
                </div>
                <nav class="menu__body">

                    <?php wp_nav_menu([
                            'theme_location' => 'header',
                            'container' => null,
                            'menu_class' => 'menu__list'
                    ])?>

	                <?php get_search_form(); ?>
                </nav>
            </div>
        </div>

        <div class="modal" id="modalWin">
            <div class="popup-form">
                <form method="post" class="window feedback-form" name="feedback-form">
                    <h1 class="ContactUs">
                        Есть жалобы,<br> предложения или пожелания?<br> <b>Свяжитесь с нами.</b>
                    </h1>

                    <input type="text" placeholder="Ваше имя" name="name"  id="name" class="form field" required>

                    <input type="email" placeholder="Ваш email" name="email" id="email" class="form field" required>

                    <p class="info">Эти данные нужны нам для того, чтобы мы смогли ответить на Ваш отзыв</p>

                    <textarea name="congratulations" id="congrat" class="field" cols="50" rows="10" placeholder="Ваши пожелания" required></textarea>
                    <div class="submit-btn">
                        <input type="submit" id="sendFeedback" value="Отправить" class="form">
                    </div>
                    <p class="contacts">
                        Контакты для коммерческих предложений: <br> <b>commercial@ithub.com</b> <br> <b>+7 428 642 47-85</b>
                    </p>
                    <button type="button" class="closeBtn" id="close">X</button>
                </form>
            </div>
            <div class="overlay" id="over"></div>
        </div>
    </header>