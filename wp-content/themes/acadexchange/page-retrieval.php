<?php
$equipmentRequest = isset($_SESSION['equipmentRequest']) ? $_SESSION['equipmentRequest'] : NULL;
unset($_SESSION['equipmentRequest']);

$query = new WP_Query( array( 'post_type' => 'retrieval'));
?>

<?php get_header(); ?>
    <div class="wrap">
        <main class="main">
            <div class="wrapper">
                <section class="section section--retrieval">
                    <h2 class="section__title">Get an old equipment in 5 steps</h2>
                    <?php if ( $query->have_posts() ) : ?>
                        <?php while ( $query->have_posts() ) : $query->the_post();?>
                            <?php if ( have_rows('page')): ?>
                                <?php while ( have_rows('page') ) : the_row(); ?>
                                    <?php if( get_row_layout() == 'presentation' ): ?>
                                        <p class="section__text"><?php the_sub_field('text_1');?></p>
                                        <p class="section__text"><?php the_sub_field('text_2');?></p>
                                    <?php endif; ?>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <div class="container container--big">
                        <?php if ( $query->have_posts() ) : ?>
                            <?php while ( $query->have_posts() ) : $query->the_post();?>
                                <?php if ( have_rows('page')): ?>
                                    <?php while ( have_rows('page') ) : the_row(); ?>
                                        <?php if( get_row_layout() == 'explanation' ): ?>
                                            <span class="section__span"><?php the_sub_field('title');?></span>
                                        <?php endif; ?>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                    <?php if ( $query->have_posts() ) : ?>
                        <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                            <?php if ( have_rows('page')): ?>
                                <?php $count = 1; ?>
                                <?php while ( have_rows('page') ) : the_row(); ?>
                                    <?php if( get_row_layout() == 'explanation' ): ?>
                                        <div class="container">
                                            <h3 class="container__title"><span class="container__span"><?php echo $count?></span> <?php the_sub_field('title');?></h3>
                                            <p class="container__text"><?php the_sub_field('text'); ?></p>
                                            <?php if(get_sub_field('button_text')) : ?>
                                                <a class="container__link" onclick="<?php the_sub_field('button_onclick');?>" <?php if(get_sub_field('button_link') !== ''): ?> href="<?php the_sub_field('button_link');?>" <?php endif; ?>><?php the_sub_field('button_text');?></a>
                                            <?php endif; ?>
                                        </div>
                                        <?php $count++; ?>
                                    <?php endif; ?>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </section>
            </div>
                    <?php if(isset($_SESSION['connected'])): ?>
                        <?php if($_SESSION['connected'] === "academy") : ?>
                                <section class="section section--bundle">
                                    <div class="wrapper">
                                        <h2 class="section__title">The bundle you want</h2>
                                        <form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post" class="form" id="bundleForm">
                                            <div class="container container--large">
                                                <label class="container__label" for="bundleChosen">Choose your bundle</label>
                                                <select class="container__input" name="bundleChosen" id="bundleChosen">
                                                    <option value="3">Bundle of 3 routers and 3 switches</option>
                                                    <option value="6">Bundle of 6 routers and 6 switches</option>
                                                </select>
                                            </div>
                                            <div class="container container--left">
                                                <label class="container__label" for="utilizationPerWeek">How many hours <strong class="bold">per week</strong> will you use this bundle ?</label>
                                                <input class="container__input" type="number" name="utilizationPerWeek" id="utilizationPerWeek" value="0">
                                            </div>
                                            <div class="container">
                                                <label class="container__label" for="numberOfStudentPerWeek">How many students will use this bundle <strong class="bold">per week</strong> ?</label>
                                                <input class="container__input" type="number" name="numberOfStudentPerWeek" id="numberOfStudentPerWeek" value="0">
                                            </div>
                                            <input type="hidden" name="action" value="bundle_form">
                                            <p class="form__error" id="bundleError">Please fill the field that are empty.</p>
                                            <?php if($equipmentRequest): ?>
                                                <p class="form__feedback" id="bundleFeedback"><?php echo $equipmentRequest?></p>
                                            <?php endif;?>
                                            <button class="form__input" type="button" onclick="verifyBundleForm()">Submit your request</button>
                                        </form>
                                    </div>
                                </section>
                        <?php endif; ?>
                    <?php endif; ?>
        </main>
    </div>
<?php get_footer(); ?>