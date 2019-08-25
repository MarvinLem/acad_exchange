<?php
require_once('config/functions.php');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description"
          content="Acad Exchange is a website that allows Cisco Academies to donate equipment that they no longer use to other Cisco Academies that do not have the same means.">
    <meta name="keywords"
          content="Acad Exchange,Cisco,Donation,Twinning,CCNA">
    <link href="<?php echo get_stylesheet_uri(); ?>" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri()?>/public/assets/favicon.png">
    <title>Acad Exchange</title>
</head>
<body>
    <header class="header">
        <h1 class="header__title">Acad Exchange</h1>
        <a href="<?php echo get_home_url();?>" title="Go to the homepage"><img class="header__image" src="<?php echo get_template_directory_uri()?>/public/assets/logo.png" alt="Logo d'Acad Exchange"></a>
        <div class="burger-menu">
            <input class="burger__checkbox" type="checkbox" />
            <span class="burger-menu__span"></span>
            <span class="burger-menu__span"></span>
            <span class="burger-menu__span"></span>
            <nav class="header__nav">
                <h2 class="nav__title">Main Menu</h2>
                    <?php
                    $menuParameters = array (
                        'theme_location' => 'header-menu',
                        'echo' => false,
                        'item_wrap' => '%3s',
                        'list_item_class' => 'nav-item',
                        'link_class' => 'nav__link'
                    );
                    echo strip_tags(wp_nav_menu( $menuParameters ), '<a>' );
                    ?>
                <?php if(isset($_SESSION['connected'])): ?>
                    <?php if($_SESSION['connected'] === "academy") : ?>
                        <a href="<?php echo get_permalink( get_page_by_title( 'Profil' ) )?>" class="nav__link">Profil</a>
                        <button class="nav__button" onclick="disconnectFromSite()">Disconnect</button>
                    <?php elseif($_SESSION['connected'] === "particular") : ?>
                        <a href="<?php echo get_permalink( get_page_by_title( 'Profil' ) )?>" class="nav__link">Profil</a>
                        <button class="nav__button" onclick="disconnectFromSite()">Disconnect</button>
                    <?php endif; ?>
                <?php else: ?>
                        <button class="nav__button" onclick="displayLoginForm()">Log in/Register</button>
                <?php endif;?>
            </nav>
        </div>
        <div class="wrapper">
            <div class="login">
                <div class="container container--login">
                    <form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post" class="container__form" id="loginForm">
                        <h3 class="container__title">Login</h3>
                        <div class="container">
                            <label class="container__label" for="name">Username</label>
                            <input class="container__input" type="text" name="name" id="name" placeholder="Enter your username">
                        </div>
                        <div class="container">
                            <label class="container__label" for="pass">Password</label>
                            <input class="container__input" type="password" name="pass" id="pass" placeholder="Enter your password">
                        </div>
                        <input type="hidden" name="action" value="login_form">
                        <p class="container__error" id="loginError">Please fill the field that are empty.</p>
                        <button class="form__input" type="button" onclick="verifyLoginForm()">Log In</button>
                    </form>
                </div>
                <div class="container container--register">
                    <form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post" class="container__form" id="registerForm">
                        <h3 class="container__title">Register</h3>
                        <div class="container">
                            <label class="container__label" for="email">Email</label>
                            <input class="container__input" type="email" name="email" id="email" placeholder="Enter your email adress">
                        </div>
                        <div class="container">
                            <label class="container__label" for="nameRegister">Username</label>
                            <input class="container__input" type="text" name="nameRegister" id="nameRegister" placeholder="Enter your username">
                        </div>
                        <div class="container">
                            <label class="container__label" for="passRegister">Password</label>
                            <input class="container__input" type="password" name="passRegister" id="passRegister" placeholder="Enter your password">
                        </div>
                        <div class="container">
                            <label class="container__label" for="confirm">Confirm password</label>
                            <input class="container__input" type="password" name="confirm" id="confirm" placeholder="Confirm your password">
                        </div>
                        <div class="container">
                            <label class="container__label" for="city">City</label>
                            <input class="container__input" type="text" name="city" id="city" placeholder="Enter your city">
                        </div>
                        <div class="container">
                            <label class="container__label" for="country">Country</label>
                            <input class="container__input" type="text" name="country" id="country" placeholder="Enter your country">
                        </div>
                        <div class="container">
                            <label class="container__label" for="role">Who am I ?</label>
                            <select class="container__input" name="role" id="role">
                                <option value="academy">Cisco Academy</option>
                                <option value="particular">Particular</option>
                            </select>
                        </div>
                        <input type="hidden" name="action" value="register_form">
                        <p class="container__error" id="registerError">Please fill the field that are empty.</p>
                        <p class="container__error" id="registerErrorPass">Passwords don't match.</p>
                        <button class="form__input" type="button" onclick="verifyRegisterForm()">Register</button>
                    </form>
                    <form id="disconnectForm" style="display: none" action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post">
                        <input type="hidden" name="action" value="disconnect_from_session">
                    </form>
                </div>
                <img class="login__img" src="<?php echo get_template_directory_uri()?>/public/assets/cross.svg" onclick="closeLoginForm()">
            </div>
        </div>
    </header>
    <div class="shadow"></div>