<?php
$query = new WP_Query( array( 'post_type' => 'success_story'));
$query_purpose = new WP_Query( array( 'post_type' => 'purpose'));
$query_sponsors = new WP_Query( array( 'post_type' => 'sponsors'))
?>
<?php get_header(); ?>
    <div class="wrap">
        <main class="main">
            <div class="wrapper">
                <section class="section section--purpose">
                <?php if ( $query_purpose->have_posts() ) : ?>
                    <?php while ( $query_purpose->have_posts() ) : $query_purpose->the_post();?>
                    <?php   $paragraph_1 = get_field('paragraph_1');
                            $paragraph_2 = get_field('paragraph_2');
                            $paragraph_3 = get_field('paragraph_3'); ?>
                    <h2 class="section__title"><?php the_title(); ?></h2>
                    <div class="container">
                        <p class="container__text"><?php echo $paragraph_1; ?></p>
                    </div>
                    <div class="container">
                        <p class="container__text"><?php echo $paragraph_2; ?></p>
                    </div>
                    <div class="container">
                        <p class="container__text"><?php echo $paragraph_3; ?></p>
                    </div>
                    <?php endwhile; ?>
                <?php endif; ?>
                </section>
                <section class="section section--article">
                    <h2 class="section__title">Success Story</h2>
                    <?php if ( $query->have_posts() ) : ?>
                        <?php while ( $query->have_posts() ) : $query->the_post();?>
                            <?php if ( have_rows('content')): ?>
                                <?php while ( have_rows('content') ) : the_row(); ?>
                                    <?php if( get_row_layout() == 'story' ): ?>
                                    <?php $image = get_sub_field('image');
                                    $size = 'medium';
                                    $thumb = $image['sizes'][ $size ];?>
                                    <div class="container">
                                        <h3 class="container__title"><?php the_sub_field('title'); ?></h3>
                                        <img class="container__image" src="<?php echo $thumb; ?>" alt="<?php echo $image['alt']; ?>">
                                        <p class="container__text"><?php the_sub_field('text') ?></p>
                                    </div>
                                    <?php endif; ?>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </section>
                <section class="section section--sponsor">
                    <h2 class="section__title">Our partners and our sponsors</h2>
                    <?php if ( $query_sponsors->have_posts() ) : ?>
                        <?php while ( $query_sponsors->have_posts() ) : $query_sponsors->the_post();?>
                            <?php if ( have_rows('content')): ?>
                                <?php while ( have_rows('content') ) : the_row(); ?>
                                    <?php if( get_row_layout() == 'sponsor' ): ?>
                                        <?php $logo = get_sub_field('image');
                                                $size = 'thumbnail';
                                                $thumb = $logo['sizes'][ $size ];?>
                                        <img class="section__image" src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>">
                                    <? endif; ?>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </section>
            </div>
        </main>
    </div>
<?php get_footer(); ?>