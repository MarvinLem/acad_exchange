<?php
$twinningRequest = isset($_SESSION['twinningRequest']) ? $_SESSION['twinningRequest'] : NULL;
unset($_SESSION['twinningRequest']);

$query = new WP_Query( array( 'post_type' => 'twinning'));
?>

<?php get_header(); ?>
    <div class="wrap">
        <main class="main">
            <div class="wrapper">
                <section class="section section--twinning">
                    <h2 class="section__title">Twinning in 5 steps</h2>
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
                        <?php
                        require_once("config/functions.php");
                        $academyData = getAllUsersAcademy();
                        ?>
                        <section class="section section--academy">
                            <div class="wrapper">
                                <h2 class="section__title">Work with another school</h2>
                                <form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post" class="form" id="academyForm">
                                    <div class="container container--large">
                                        <label class="container__label" for="academyTwin">Choose your academy</label>
                                        <select class="container__input" name="academyTwin" id="academyTwin">
                                            <?php foreach($academyData as $academy): ?>
                                                <?php if($_SESSION["id"] !== $academy->idUsers): ?>
                                                <option value="<?php echo $academy->idUsers; ?>"><?php echo $academy->name;?></option>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <input type="hidden" name="action" value="academy_form">
                                    <?php if($twinningRequest): ?>
                                        <p class="form__feedback" id="academyFeedback"><?php echo $twinningRequest?></p>
                                    <?php endif;?>
                                    <button class="form__input" type="submit">Choose this academy</button>
                                </form>
                            </div>
                        </section>
                    <?php endif; ?>
                <?php endif; ?>
        </main>
    </div>
<?php get_footer(); ?>