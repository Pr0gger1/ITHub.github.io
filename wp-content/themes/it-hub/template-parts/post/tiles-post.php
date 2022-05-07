<article class="article">
	<div class="preview">
		<a href="<?php echo get_permalink(); ?>" class="preview__link ibg"><?php the_post_thumbnail(); ?></a>
	</div>
	<div class="capture">
		<div class="title-article">
			<a href="<?php echo get_permalink(); ?>"><?php
                the_title();
//				$title = the_title("", "", 0);
//				if (strlen($title) > 25) {
//					echo substr( $title, 0, 80 );
//				}
//				else{ echo $title;}
				?></a>
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