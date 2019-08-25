<?php
    $query = new WP_Query( array( 'post_type' => 'eligible_equipment'));
?>
<?php get_header(); ?>
    <div class="wrap">
        <main class="main">
            <div class="wrapper">
                <section class="section section--eligible">
                    <h2 class="section__title">List of eligible equipments</h2>
                    <?php if ( $query->have_posts() ) : ?>
                        <?php while ( $query->have_posts() ) : $query->the_post();?>
                            <?php if ( have_rows('content')): ?>
                                <?php while ( have_rows('content') ) : the_row(); ?>
                                    <?php if( get_row_layout() == 'equipment' ): ?>
                                <?php
                                    $image = get_sub_field('image');
                                    $size = 'medium';
                                    $thumb = $image['sizes'][ $size ];
                                ?>
                                        <div class="container">
                                            <h3 class="container__title"><?php the_sub_field('title');?></h3>
                                            <?php if($thumb): ?>
                                                <img class="container__image" src="<?php echo $thumb;?>" alt="<?php echo $image['alt'];?>">
                                            <?php endif; ?>
                                            <ul class="container__list">
                                                <?php while( have_rows('list') ): the_row();?>
                                                <li class="list__item"><?php the_sub_field('name');?></li>
                                                <?php endwhile; ?>
                                            </ul>
                                        </div>
                                    <?php endif; ?>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </section>
                <section class="section section--cta">
                    <h2 class="section__title">Are you looking for one of these equipments or you have an old one to give ?</h2>
                    <div class="container">
                        <a class="container__link" title="Link to the donation page" href="<?php echo get_permalink( get_page_by_title('Donation'));?>">Make a donation</a>
                        <a class="container__link" title="Link to the get equipment page" href="<?php echo get_permalink( get_page_by_title('Get equipment'));?>">Get a donation</a>
                    </div>
                </section>
            </div>
        </main>
    </div>
<?php get_footer(); ?>