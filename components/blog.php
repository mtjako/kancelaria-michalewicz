<div class="blog">
    <h3 class="blog__header" id="blog">Blog</h3>
    <p class="blog__description">Najnowsze artykuły na tematy dotyczące prawa karnego, cywilnego, rodzinnego oraz spadkowego oraz odszkodowań z tytułu wypadków.</p>
    <div class="blog__wrap">
    <?php 
    if(have_posts()){
        while(have_posts()){
            the_post();
            get_template_part('components/blog-tile');
        }
    }
    the_posts_pagination(array(
        'class'=>'pagination',
        'prev_text'=>'<',
        'next_text'=>'>'
    ));
    ?>
    </div>
</div>