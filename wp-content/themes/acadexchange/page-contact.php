<?php get_header(); ?>
    <div class="wrap">
        <main class="main">
            <div class="wrapper">
                <section class="section section--contact">
                    <h2 class="section__title">Contact Form</h2>
                    <p class="section__text">If you have something to ask us about how donations and twinning works, feel free to send a message via the contact form</p>
                    <img class="section__image" src="<?php echo get_template_directory_uri()?>/public/assets/email.svg">
                    <?php echo do_shortcode( '[contact-form-7 id="80" title="Contact" html_class="section__form"]' ); ?>
                </section>
            </div>
        </main>
    </div>
<?php get_footer(); ?>