<?php

require_once('config/functions.php');

function register_my_menus() {
    register_nav_menus(array(
        'header-menu' => ( 'Menu Header' ),
    ));
}

function wpm_custom_post_type_home()
{
    // On rentre les différentes dénominations de notre custom post type qui seront affichées dans l'administration
    $labels = array(
        // Le nom au pluriel
        'name' => _x('Home', 'Post Type General Name'),
        // Le nom au singulier
        'singular_name' => _x('Home', 'Post Type Singular Name'),
        // Le libellé affiché dans le menu
        'menu_name' => __('Home'),
        // Les différents libellés de l'administration
        'all_items' => __('Every home section'),
        'view_item' => __('See home section'),
        'add_new_item' => __('Add a new home section'),
        'add_new' => __('Add'),
        'edit_item' => __('Edit'),
        'update_item' => __('Update'),
        'search_items' => __('Find a home section'),
        'not_found' => __('Not find'),
        'not_found_in_trash' => __('Not find in the trash'),
    );

    // On peut définir ici d'autres options pour notre custom post type

    $args = array(
        'label' => __('Home'),
        'description' => __('Every home section'),
        'labels' => $labels,
        // On définit les options disponibles dans l'éditeur de notre custom post type ( un titre, un auteur...)
        'supports' => array('title'),
        /*
        * Différentes options supplémentaires
        */
        'hierarchical' => false,
        'public' => true,
        'menu_icon' => __('dashicons-admin-home'),
        'has_archive' => true,
        'rewrite' => array('slug' => 'home'),

    );

    // On enregistre notre custom post type qu'on nomme ici "informations" et ses arguments
    register_post_type('home', $args);
}

function wpm_custom_post_type_donation()
{
    // On rentre les différentes dénominations de notre custom post type qui seront affichées dans l'administration
    $labels = array(
        // Le nom au pluriel
        'name' => _x('Donation', 'Post Type General Name'),
        // Le nom au singulier
        'singular_name' => _x('Donation', 'Post Type Singular Name'),
        // Le libellé affiché dans le menu
        'menu_name' => __('Donation'),
        // Les différents libellés de l'administration
        'all_items' => __('Every donation step'),
        'view_item' => __('See donations step'),
        'add_new_item' => __('Add a new donation step'),
        'add_new' => __('Add'),
        'edit_item' => __('Edit'),
        'update_item' => __('Update'),
        'search_items' => __('Find a donation step'),
        'not_found' => __('Not find'),
        'not_found_in_trash' => __('Not find in the trash'),
    );

    // On peut définir ici d'autres options pour notre custom post type

    $args = array(
        'label' => __('Donation'),
        'description' => __('Every donation step'),
        'labels' => $labels,
        // On définit les options disponibles dans l'éditeur de notre custom post type ( un titre, un auteur...)
        'supports' => array('title'),
        /*
        * Différentes options supplémentaires
        */
        'hierarchical' => false,
        'public' => true,
        'menu_icon' => __('dashicons-arrow-right-alt2'),
        'has_archive' => true,
        'rewrite' => array('slug' => 'donation'),

    );

    // On enregistre notre custom post type qu'on nomme ici "informations" et ses arguments
    register_post_type('donation', $args);
}

function wpm_custom_post_type_retrieval()
{
    // On rentre les différentes dénominations de notre custom post type qui seront affichées dans l'administration
    $labels = array(
        // Le nom au pluriel
        'name' => _x('Retrieval', 'Post Type General Name'),
        // Le nom au singulier
        'singular_name' => _x('Retrieval', 'Post Type Singular Name'),
        // Le libellé affiché dans le menu
        'menu_name' => __('Retrieval'),
        // Les différents libellés de l'administration
        'all_items' => __('Every retrieval step'),
        'view_item' => __('See retrieval step'),
        'add_new_item' => __('Add a new retrieval step'),
        'add_new' => __('Add'),
        'edit_item' => __('Edit'),
        'update_item' => __('Update'),
        'search_items' => __('Find a retrieval step'),
        'not_found' => __('Not find'),
        'not_found_in_trash' => __('Not find in the trash'),
    );

    // On peut définir ici d'autres options pour notre custom post type

    $args = array(
        'label' => __('Retrieval'),
        'description' => __('Every retrieval step'),
        'labels' => $labels,
        // On définit les options disponibles dans l'éditeur de notre custom post type ( un titre, un auteur...)
        'supports' => array('title'),
        /*
        * Différentes options supplémentaires
        */
        'hierarchical' => false,
        'public' => true,
        'menu_icon' => __('dashicons-arrow-left-alt2'),
        'has_archive' => true,
        'rewrite' => array('slug' => 'retrieval'),

    );

    // On enregistre notre custom post type qu'on nomme ici "informations" et ses arguments
    register_post_type('retrieval', $args);
}

function wpm_custom_post_type_twinning()
{
    // On rentre les différentes dénominations de notre custom post type qui seront affichées dans l'administration
    $labels = array(
        // Le nom au pluriel
        'name' => _x('Twinning', 'Post Type General Name'),
        // Le nom au singulier
        'singular_name' => _x('Twinning', 'Post Type Singular Name'),
        // Le libellé affiché dans le menu
        'menu_name' => __('Twinning'),
        // Les différents libellés de l'administration
        'all_items' => __('Every twinning step'),
        'view_item' => __('See twinning step'),
        'add_new_item' => __('Add a new twinning step'),
        'add_new' => __('Add'),
        'edit_item' => __('Edit'),
        'update_item' => __('Update'),
        'search_items' => __('Find a twinning step'),
        'not_found' => __('Not find'),
        'not_found_in_trash' => __('Not find in the trash'),
    );

    // On peut définir ici d'autres options pour notre custom post type

    $args = array(
        'label' => __('Twinning'),
        'description' => __('Every twinning step'),
        'labels' => $labels,
        // On définit les options disponibles dans l'éditeur de notre custom post type ( un titre, un auteur...)
        'supports' => array('title'),
        /*
        * Différentes options supplémentaires
        */
        'hierarchical' => false,
        'public' => true,
        'menu_icon' => __('dashicons-networking'),
        'has_archive' => true,
        'rewrite' => array('slug' => 'twinning'),

    );

    // On enregistre notre custom post type qu'on nomme ici "informations" et ses arguments
    register_post_type('twinning', $args);
}

function wpm_custom_post_type_eligible_equipment()
{
    // On rentre les différentes dénominations de notre custom post type qui seront affichées dans l'administration
    $labels = array(
        // Le nom au pluriel
        'name' => _x('Eligible equipments', 'Post Type General Name'),
        // Le nom au singulier
        'singular_name' => _x('Eligible equipment', 'Post Type Singular Name'),
        // Le libellé affiché dans le menu
        'menu_name' => __('Eligible equipments'),
        // Les différents libellés de l'administration
        'all_items' => __('Every eligible equipments'),
        'view_item' => __('See eligible equipment'),
        'add_new_item' => __('Add a new eligible equipment'),
        'add_new' => __('Add'),
        'edit_item' => __('Edit'),
        'update_item' => __('Update'),
        'search_items' => __('Find a eligible equipment'),
        'not_found' => __('Not find'),
        'not_found_in_trash' => __('Not find in the trash'),
    );

    // On peut définir ici d'autres options pour notre custom post type

    $args = array(
        'label' => __('Twinning'),
        'description' => __('Every eligible equipment'),
        'labels' => $labels,
        // On définit les options disponibles dans l'éditeur de notre custom post type ( un titre, un auteur...)
        'supports' => array('title'),
        /*
        * Différentes options supplémentaires
        */
        'hierarchical' => false,
        'public' => true,
        'menu_icon' => __('dashicons-editor-ol'),
        'has_archive' => true,
        'rewrite' => array('slug' => 'eligible_equipment'),

    );

    // On enregistre notre custom post type qu'on nomme ici "informations" et ses arguments
    register_post_type('eligible_equipment', $args);
}

function wpm_custom_post_type_success_story()
{
    // On rentre les différentes dénominations de notre custom post type qui seront affichées dans l'administration
    $labels = array(
        // Le nom au pluriel
        'name' => _x('Success story', 'Post Type General Name'),
        // Le nom au singulier
        'singular_name' => _x('Success story', 'Post Type Singular Name'),
        // Le libellé affiché dans le menu
        'menu_name' => __('Success story'),
        // Les différents libellés de l'administration
        'all_items' => __('Every success story'),
        'view_item' => __('See success story'),
        'add_new_item' => __('Add a new success story'),
        'add_new' => __('Add'),
        'edit_item' => __('Edit'),
        'update_item' => __('Update'),
        'search_items' => __('Find a success story'),
        'not_found' => __('Not find'),
        'not_found_in_trash' => __('Not find in the trash'),
    );

    // On peut définir ici d'autres options pour notre custom post type

    $args = array(
        'label' => __('Twinning'),
        'description' => __('Every success story'),
        'labels' => $labels,
        // On définit les options disponibles dans l'éditeur de notre custom post type ( un titre, un auteur...)
        'supports' => array('title'),
        /*
        * Différentes options supplémentaires
        */
        'hierarchical' => false,
        'public' => true,
        'menu_icon' => __('dashicons-edit'),
        'has_archive' => true,
        'rewrite' => array('slug' => 'success_story'),

    );

    // On enregistre notre custom post type qu'on nomme ici "informations" et ses arguments
    register_post_type('success_story', $args);
}

function wpm_custom_post_type_purpose()
{
    // On rentre les différentes dénominations de notre custom post type qui seront affichées dans l'administration
    $labels = array(
        // Le nom au pluriel
        'name' => _x('Purpose', 'Post Type General Name'),
        // Le nom au singulier
        'singular_name' => _x('Purpose', 'Post Type Singular Name'),
        // Le libellé affiché dans le menu
        'menu_name' => __('Purpose'),
        // Les différents libellés de l'administration
        'all_items' => __('Every purpose paragraph'),
        'view_item' => __('See purpose paragraph'),
        'add_new_item' => __('Add a new purpose paragraph'),
        'add_new' => __('Add'),
        'edit_item' => __('Edit'),
        'update_item' => __('Update'),
        'search_items' => __('Find a purpose paragraph'),
        'not_found' => __('Not find'),
        'not_found_in_trash' => __('Not find in the trash'),
    );

    // On peut définir ici d'autres options pour notre custom post type

    $args = array(
        'label' => __('Twinning'),
        'description' => __('Every purpose paragraph'),
        'labels' => $labels,
        // On définit les options disponibles dans l'éditeur de notre custom post type ( un titre, un auteur...)
        'supports' => array('title'),
        /*
        * Différentes options supplémentaires
        */
        'hierarchical' => false,
        'public' => true,
        'menu_icon' => __('dashicons-admin-comments'),
        'has_archive' => true,
        'rewrite' => array('slug' => 'purpose'),

    );

    // On enregistre notre custom post type qu'on nomme ici "informations" et ses arguments
    register_post_type('purpose', $args);
}

function wpm_custom_post_type_sponsors()
{
    // On rentre les différentes dénominations de notre custom post type qui seront affichées dans l'administration
    $labels = array(
        // Le nom au pluriel
        'name' => _x('Sponsors', 'Post Type General Name'),
        // Le nom au singulier
        'singular_name' => _x('Sponsor', 'Post Type Singular Name'),
        // Le libellé affiché dans le menu
        'menu_name' => __('Sponsors'),
        // Les différents libellés de l'administration
        'all_items' => __('Every sponsor'),
        'view_item' => __('See sponsor'),
        'add_new_item' => __('Add a new sponsor'),
        'add_new' => __('Add'),
        'edit_item' => __('Edit'),
        'update_item' => __('Update'),
        'search_items' => __('Find a sponsor'),
        'not_found' => __('Not find'),
        'not_found_in_trash' => __('Not find in the trash'),
    );

    // On peut définir ici d'autres options pour notre custom post type

    $args = array(
        'label' => __('Twinning'),
        'description' => __('Every sponsor'),
        'labels' => $labels,
        // On définit les options disponibles dans l'éditeur de notre custom post type ( un titre, un auteur...)
        'supports' => array('title'),
        /*
        * Différentes options supplémentaires
        */
        'hierarchical' => false,
        'public' => true,
        'menu_icon' => __('dashicons-universal-access'),
        'has_archive' => true,
        'rewrite' => array('slug' => 'sponsors'),

    );

    // On enregistre notre custom post type qu'on nomme ici "informations" et ses arguments
    register_post_type('sponsors', $args);
}

function add_menu_link_class( $atts, $item, $args ) {
    if (property_exists($args, 'link_class')) {
        $atts['class'] = $args->link_class;
    }
    return $atts;
}

function remove_menus(){
    remove_menu_page( 'tools.php' );
    remove_menu_page( 'edit.php' );
    remove_menu_page( 'upload.php' );
    remove_menu_page( 'edit.php?post_type=page' );
    remove_menu_page( 'edit-comments.php' );
}

function add_file_types_to_uploads($file_types){

    $new_filetypes = array();
    $new_filetypes['svg'] = 'image/svg+xml';
    $file_types = array_merge($file_types, $new_filetypes );

    return $file_types;
}

function login_to_site() {
    $name = $_POST['name'];
    $password = $_POST['pass'];

    $userData = getUser($name);
    $userID = $userData->idUsers;
    $userPassword = $userData->password;
    $userRole = $userData->role;

    if(password_verify($password, $userPassword)){
        $_SESSION['connected'] = $userRole;
        $_SESSION['id'] = $userID;
    }
    header('Location: '.get_home_url());
}

function register_to_site() {
    $name = $_POST['nameRegister'];
    $email = $_POST['email'];
    $password = password_hash( $_POST['passRegister'], PASSWORD_BCRYPT);
    $city = $_POST['city'];
    $country = $_POST['country'];
    $role = $_POST['role'];
    storeUser($name, $email, $password, $city, $country, $role);
    //Connexion apres l'inscription
    $userData = getUser($name);
    $userID = $userData->idUsers;
    $userRole = $userData->role;
    if($userRole === 'academy') {
        storeAcademy($userID, NULL, NULL, NULL, NULL, NULL);
    }
    $_SESSION['connected'] = $userRole;
    $_SESSION['id'] = $userID;
    header('Location: '.get_home_url());
}

function disconnect(){
    session_destroy();
    header('Location: '.get_home_url());
}

function donation_proposal(){
    if(isset($_SESSION['id'])){
        $academyID = $_SESSION['id'];
        $numberOfBundleThree = $_POST['bundleOfThree'];
        $numberOfBundleSix = $_POST['bundleOfSix'];
        $functionalEquipment = isset($_POST['functionalEquipment']) ? 1 : 0;
        $eligibleEquipment = isset($_POST['eligibleEquipment']) ? 1 : 0;
        $description = $_POST['description'];
        storeDonationProposal($academyID, $numberOfBundleThree, $numberOfBundleSix, $functionalEquipment, $eligibleEquipment, $description);
        $_SESSION['donationProposal'] = 'Your donation proposal has been successfully sent !';
        header('Location: '.get_permalink( get_page_by_title( 'Donation' )).'#donateForm');
    } else {
        $_SESSION['donationProposal'] = 'There was an error while sending your donation proposal !';
        header('Location: '.get_permalink( get_page_by_title( 'Donation' )).'#donateForm');
    }
}

function equipment_request(){
    if (isset($_SESSION['id'])) {
        $academyID = $_SESSION['id'];
        $bundleSize = $_POST['bundleChosen'];
        $utilizationPerWeek = $_POST['utilizationPerWeek'];
        $studentsPerWeek = $_POST['numberOfStudentPerWeek'];
        storeEquipmentRequest($academyID, $bundleSize, $utilizationPerWeek, $studentsPerWeek);
        $_SESSION['equipmentRequest'] = 'Your equipment request has been successfully sent !';
        header('Location: '.get_permalink( get_page_by_title( 'Get equipment' )).'#bundleForm');
    } else {
        $_SESSION['equipmentRequest'] = 'There was an error while sending your equipment request !';
        header('Location: '.get_permalink( get_page_by_title( 'Get equipment' )).'#bundleForm');
    }
}

function twinning_academy(){
    if (isset($_SESSION['id'])) {
        $academyInitiator = $_SESSION['id'];
        $academyResponder = $_POST['academyTwin'];
        $CSRManagerID = '1';
        $approvedByCsr = '0000-00-00';
        storeTwinning($academyInitiator, $academyResponder, $CSRManagerID, $approvedByCsr);
        $_SESSION['twinningRequest'] = 'Your twinning request has been successfully sent !';
        header('Location: '.get_permalink( get_page_by_title( 'Twinning' )).'#academyForm');
    } else {
        $_SESSION['twinningRequest'] = 'There was an error while sending your twinning request !';
        header('Location: '.get_permalink( get_page_by_title( 'Twinning' )).'#academyForm');
    }
}

function academy_exchange(){
    if (isset($_SESSION['id'])) {
        $CSRManagerID = $_SESSION['id'];
        $donationProposal = $_POST['proposal'];
        $donationRequest = $_POST['request'];
        storeDonation($donationProposal, $donationRequest, $CSRManagerID);
        header('Location: '.get_home_url());
    } else {
        header('Location: '.get_home_url());
    }
}

function twinning_update(){
    if (isset($_SESSION['id'])) {
        $twinningID = $_POST['twinning_id'];
        $approvedByCsr = date('Y-m-d H:i:s');
        updateTwinning($twinningID, $approvedByCsr);
        header('Location: '.get_home_url());
    } else {
        header('Location: '.get_home_url());
    }
}

function profil_update(){
    if (isset($_SESSION['id'])) {
        $userID = $_SESSION['id'];
        $name = $_POST['nom'];
        $email = $_POST['mail'];
        $city = $_POST['city'];
        $country = $_POST['country'];
        updateUser($userID, $name, $email, $city, $country);
        header('Location: '.get_permalink( get_page_by_title( 'Profil' )).'#profilForm');
    } else {
        header('Location: '.get_permalink( get_page_by_title( 'Profil' )).'#profilForm');
    }
}

function academy_update(){
    if (isset($_SESSION['id'])) {
        $userID = $_SESSION['id'];
        $netacadMemberSince = $_POST['netacadMemberSince'];
        $numberOfNewStudentsEachYear = $_POST['numberOfStudents'];
        $academyLevel = $_POST['academyLevel'];
        $preferred_Language = $_POST['preferredLanguage'];
        $alternative_Language = $_POST['alternativeLanguage'];
        updateAcademy($userID, $netacadMemberSince, $numberOfNewStudentsEachYear, $academyLevel, $preferred_Language, $alternative_Language);
        header('Location: '.get_permalink( get_page_by_title( 'Profil' )).'#profil-academyForm');
    } else {
        header('Location: '.get_permalink( get_page_by_title( 'Profil' )).'#profil-academyForm');
    }
}

add_action( 'admin_post_nopriv_login_form', 'login_to_site' );
add_action( 'admin_post_login_form', 'login_to_site' );

add_action( 'admin_post_nopriv_register_form', 'register_to_site' );
add_action( 'admin_post_register_form', 'register_to_site' );

add_action( 'admin_post_nopriv_disconnect_from_session', 'disconnect' );
add_action( 'admin_post_disconnect_from_session', 'disconnect' );

add_action( 'admin_post_nopriv_donate_form', 'donation_proposal' );
add_action( 'admin_post_donate_form', 'donation_proposal' );

add_action( 'admin_post_nopriv_bundle_form', 'equipment_request' );
add_action( 'admin_post_bundle_form', 'equipment_request' );

add_action( 'admin_post_nopriv_academy_form', 'twinning_academy' );
add_action( 'admin_post_academy_form', 'twinning_academy' );

add_action( 'admin_post_nopriv_exchange_form', 'academy_exchange' );
add_action( 'admin_post_exchange_form', 'academy_exchange' );

add_action( 'admin_post_nopriv_twin_form', 'twinning_update' );
add_action( 'admin_post_twin_form', 'twinning_update' );

add_action( 'admin_post_nopriv_profil_form', 'profil_update' );
add_action( 'admin_post_profil_form', 'profil_update' );

add_action( 'admin_post_nopriv_profil-academy_form', 'academy_update' );
add_action( 'admin_post_profil-academy_form', 'academy_update' );

add_filter('wpcf7_form_elements', function($content) {
    $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);

    return $content;
});

add_image_size( 'responsive_size', 540 );

add_filter('wpcf7_autop_or_not', '__return_false');

add_filter( 'nav_menu_link_attributes', 'add_menu_link_class', 1, 3 );
add_action( 'init', 'register_my_menus', 0 );
add_action( 'init', 'wpm_custom_post_type_home', 0);
add_action( 'init', 'wpm_custom_post_type_donation', 0);
add_action( 'init', 'wpm_custom_post_type_retrieval', 0);
add_action( 'init', 'wpm_custom_post_type_twinning', 0);
add_action( 'init', 'wpm_custom_post_type_eligible_equipment', 0);
add_action( 'init', 'wpm_custom_post_type_success_story', 0);
add_action( 'init', 'wpm_custom_post_type_purpose', 0);
add_action( 'init', 'wpm_custom_post_type_sponsors', 0);
add_action( 'admin_menu', 'remove_menus', 0 );
add_action('upload_mimes', 'add_file_types_to_uploads');