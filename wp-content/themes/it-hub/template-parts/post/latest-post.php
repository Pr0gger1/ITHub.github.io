<section class="other-articles articles">
        <?php
        $posts = get_posts([
            "numberposts" => 4,
            "orderby" => 'date',
            "exclude" => get_the_ID(),
            "post_type" => "post"
        ]);
        foreach ($posts as $post):
            setup_postdata($post);
        ?>

        <article class="article">
            <div class="preview">
                <a href="<?php echo get_permalink(); ?>" class="preview__link ibg"><?php the_post_thumbnail(); ?></a>
            </div>
            <div class="capture">
                <div class="title-article">
                    <a href="<?php echo get_permalink(); ?>"><?php
                        $title = the_title("", "", 0);
                        if (strlen($title) > 25):
                            echo substr( $title, 0, 80 );
                        else:
                         echo $title;
                        endif; ?>
                    </a>
                </div>
                <div class="date">
                    <span class="icon-time date__icon"></span>
                    <span><?php the_time("F j H:i"); ?></span>
                </div>
                <div class="tags">
                    <span class="icon-tag tags__icon"></span>
                    <?php the_tags(""); ?>
                </div>
            </div>
        </article>
        <?php
        endforeach;
        //end loop
        ?>
    </section>