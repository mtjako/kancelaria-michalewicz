<div class="hero" style="background-image: url('<?php the_post_thumbnail_url() ?>')">
    <div class="hero__overlay">
    </div>
    <div class="hero__header">
        <h1><?php the_title()?></h1>
        <div class="hero__header__meta">
            <p><?php echo get_the_date()?></p>
            <div class="hero__header__tags">
                <?php the_tags( 
                    '<span class="hero__header__tag">#', 
                    '</span><span class="hero__header__tag">#', 
                    '</span>'
                )?>
            </div>
        </div>
    </div>
</div>
