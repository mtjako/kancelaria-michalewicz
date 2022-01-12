<div class="blog-tile">
    <a href="<?php the_permalink()?>">
    <img src="<?php the_post_thumbnail_url('thumbnail')?>" alt="" class="blog-tile__img">
    </a>
    <div class="blog-tile__text">
        <a href="<?php the_permalink()?>">
            <h4 class="blog-tile__text__title"><?php the_title()?></h4>
        </a>
        <p class="blog-tile__text__description"><?php the_excerpt( )?></p>
    </div>
</div>