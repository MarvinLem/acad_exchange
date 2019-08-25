<?php
$query = new WP_Query( array( 'post_type' => 'home'));
?>
<?php get_header(); ?>
    <div class="wrap">
        <main class="main">
                <?php if ( $query->have_posts() ) : ?>
                    <?php while ( $query->have_posts() ) : $query->the_post();?>
                        <?php if ( have_rows('content')): ?>
                            <div class="wrapper">
                            <?php while ( have_rows('content') ) : the_row(); ?>
                                <?php if( get_row_layout() == 'paragraph' ): ?>
                                    <?php $image = get_sub_field('image');
                                        $size = 'responsive_size';
                                        $thumb = $image['sizes'][ $size ]; ?>
                                <section class="section section--home">
                                    <?php if(get_row_index() % 2 === 1) : ?>
                                        <img class="section__image" src="<?php echo $thumb;?>" alt="<?php echo $image['alt'];?>">
                                    <?php endif; ?>
                                    <div class="container">
                                        <h2 class="container__title"><?php the_sub_field('title'); ?></h2>
                                        <p class="container__text"><?php the_sub_field('content'); ?></p>
                                    </div>
                                    <?php if(get_row_index() % 2 === 0) : ?>
                                        <img class="section__image" src="<?php echo $thumb;?>" alt="<?php echo $image['alt'];?>">
                                    <?php endif; ?>
                                </section>
                                <?php endif; ?>
                            <?php endwhile; ?>
                            </div>
                            <section class="section section--homelink">
                                <div class="wrapper">
                            <?php while ( have_rows('content') ) : the_row(); ?>
                                <?php if( get_row_layout() == 'link' ): ?>
                                <?php $icon = get_sub_field('icon')?>
                                    <div class="container container--small">
                                        <img class="container__icon" src="<?php echo $icon['url']?>">
                                        <h3 class="container__title"><?php the_sub_field('title')?></h3>
                                        <p class="container__text"><?php the_sub_field('text')?></p>
                                        <a class="container__button" href="<?php the_sub_field('button_link')?>" title="<?php echo $icon['title']?>"><?php the_sub_field('button_text')?></a>
                                    </div>
                                <?php endif; ?>
                            <?php endwhile; ?>
                                    </div>
                                </section>
                        <?php endif; ?>
                    <?php endwhile; ?>
                <?php endif; ?>
        </main>
    </div>
<?php get_footer(); ?>