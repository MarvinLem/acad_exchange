<?php
$donationProposal = isset($_SESSION['donationProposal']) ? $_SESSION['donationProposal'] : NULL;
unset($_SESSION['donationProposal']);

$query = new WP_Query( array( 'post_type' => 'donation'));
?>
<?php get_header(); ?>
    <div class="wrap">
        <main class="main">
            <div class="wrapper">
                <section class="section section--donation">
                    <h2 class="section__title">Make a donation in 5 steps</h2>
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
                        <section class="section section--donate">
                            <div class="wrapper">
                                <h2 class="section__title">Your donations</h2>
                                <form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post" class="form" id="donateForm">
                                    <div class="container container--left">
                                        <label class="container__label" for="bundleOfThree">Number of bundle of 3 router and switch</label>
                                        <input class="container__input" type="number" name="bundleOfThree" id="bundleOfThree" value="0">
                                    </div>
                                    <div class="container">
                                        <label class="container__label" for="bundleOfSix">Number of bundle of 6 router and switch</label>
                                        <input class="container__input" type="number" name="bundleOfSix" id="bundleOfSix" value="0">
                                    </div>
                                    <div class="container container--left">
                                        <label class="container__label" for="functionalEquipment">Is your equipment functional ?</label>
                                        <input class="container__checkbox" type="checkbox" name="functionalEquipment" id="functionalEquipment" value="on">
                                    </div>
                                    <div class="container">
                                        <label class="container__label" for="eligibleEquipment">Is your equipment in the list of eligible equipments ?</label>
                                        <input class="container__checkbox" type="checkbox" name="eligibleEquipment" id="eligibleEquipment" value="on">
                                    </div>
                                    <div class="container container--large">
                                        <label class="container__label" for="description">Description of the equipments you will give</label>
                                        <textarea class="container__textarea" name="description" id="description"></textarea>
                                    </div>
                                    <input type="hidden" name="action" value="donate_form">
                                    <p class="form__error" id="donateError">Please fill the field that are empty.</p>
                                    <?php if($donationProposal): ?>
                                    <p class="form__feedback" id="donateFeedback"><?php echo $donationProposal?></p>
                                    <?php endif;?>
                                    <button class="form__input" type="button" onclick="verifyDonateForm()">Submit your donation</button>
                                </form>
                            </div>
                        </section>
                    <?php endif; ?>
                <?php endif; ?>
        </main>
    </div>
<?php get_footer(); ?>