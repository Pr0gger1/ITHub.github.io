<?php
/*
* * The template for displaying search results pages
* * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
* * @package Torba_Market
* */
get_header();?>
<?php if (!strlen($_GET['s'])): ?>
    <script>
    window.alert("Вы ничего не ввели в поисковую строку!");
    window.location.href = '/';
    </script>
<?php endif;?>

    <main class="content">
        <div class="container">

            <h1 id="search-result-l">Поиск по фразе: "<?php echo $_GET['s'];?>"</h1>
                <?php
                if (have_posts()) : echo '<h2 id="exist-search">Вот что мы смогли найти для вас</h2>';
                while (have_posts()) : the_post(); ?>

                    <?php
                        get_template_part('template-parts/post/tiles', get_post_type());
                    ?>

                <?php endwhile;
                else: ?>
                    <p id="no-result">Поиск не дал результатов. Не расстраивайтесь, ведь вы можете почитать другие наши свежие статьи, расположенные ниже</p>
                    <?php
                    get_template_part('template-parts/post/latest', 'post');
                    ?>

<!--                --><?php //endif;
                endif;
                ?>
        </div>
    </main>
<?php get_footer(); ?>