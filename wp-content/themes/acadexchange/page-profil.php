<?php
require_once("config/functions.php");
if(isset($_SESSION['id'])){
    $userData = getUserFromId($_SESSION['id']);
    $academyData = getAcademyFromId($userData->idUsers);
} else {
    header('Location: '.get_home_url());
}
?>

<?php get_header(); ?>
    <div class="wrap">
        <main class="main">
            <div class="wrapper">
                <section class="section section--profil">
                    <h2 class="section__title">Your profil</h2>
                    <form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post" class="form" id="profilForm">
                        <div class="container">
                            <label class="container__label" for="nom">Nom:</label>
                            <input class="container__input" name="nom" readonly="readonly" id="nom" type="text" value="<?php if(isset($userData->name)){echo $userData->name;}?>">
                        </div>
                        <div class="container">
                            <label class="container__label" for="mail">Email:</label>
                            <input class="container__input" name="mail" id="mail" type="email" value="<?php if(isset($userData->email)){echo $userData->email;}?>">
                        </div>
                        <div class="container">
                            <label class="container__label" for="city">City:</label>
                            <input class="container__input" name="city" id="city" type="text" value="<?php if(isset($userData->city)){echo $userData->city;}?>">
                        </div>
                        <div class="container">
                            <label class="container__label" for="country">Country:</label>
                            <input class="container__input" name="country" id="country" type="text" value="<?php if(isset($userData->country)){echo $userData->country;}?>">
                        </div>
                        <input type="hidden" name="action" value="profil_form">
                        <button class="form__button" type="submit">Edit your profil</button>
                    </form>
                </section>
                <?php if($_SESSION['connected'] === 'academy'): ?>
                <section class="section section--school">
                    <h2 class="section__title">Your academy</h2>
                    <form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post" class="form" id="profil-academyForm">
                        <div class="container">
                            <label class="container__label" for="netacadMemberSince">Netacad member since:</label>
                            <input class="container__input" name="netacadMemberSince" id="netacadMemberSince" type="date" value="<?php if(isset($academyData->NetacadMemberSince)){echo $academyData->NetacadMemberSince;}?>">
                        </div>
                        <div class="container">
                            <label class="container__label" for="numberOfStudents">Number of new students each year:</label>
                            <input class="container__input" name="numberOfStudents" id="numberOfStudents" type="number" value="<?php if(isset($academyData->NumberOfNewStudentsEachYear)){echo $academyData->NumberOfNewStudentsEachYear;}?>">
                        </div>
                        <div class="container">
                            <label class="container__label" for="academyLevel">Academy level:</label>
                            <input class="container__input" name="academyLevel" id="academyLevel" type="text" value="<?php if(isset($academyData->AcademyLevel)){echo $academyData->AcademyLevel;}?>">
                        </div>
                        <div class="container">
                            <label class="container__label" for="preferredLanguage">Preferred language:</label>
                            <input class="container__input" name="preferredLanguage" id="preferredLanguage" type="text" value="<?php if(isset($academyData->Preferred_Language)){echo $academyData->Preferred_Language;}?>">
                        </div>
                        <div class="container">
                            <label class="container__label" for="alternativeLanguage">Alternative language:</label>
                            <input class="container__input" name="alternativeLanguage" id="alternativeLanguage" type="text" value="<?php if(isset($academyData->Alternative_Language)){echo $academyData->Alternative_Language;}?>">
                        </div>
                        <input type="hidden" name="action" value="profil-academy_form">
                        <button class="form__button" type="submit">Edit your academy</button>
                    </form>
                </section>
                <?php endif; ?>
            </div>
        </main>
    </div>
<?php get_footer(); ?>